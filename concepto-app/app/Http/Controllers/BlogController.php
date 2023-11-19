<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use App\Models\Author;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list()
    {

        $posts = Blogpost::with('author')->get();

        return view('web/bloglist', [
            'posts' => $posts,
        ]);
    }

    public function post(int $id)
    {
        return view('web/blogpost', [
            'post' => Blogpost::findOrFail($id),
        ]);
    }

    public function admin()
    {

        $posts = Blogpost::with('author')->get();

        return view('admin/blog/bloglist', [
            'posts' => $posts,
        ]);
    }

    public function createForm()
    {
        return view('admin/blog/create', [
            'authors' => Author::all()
        ]);
    }

    public function createProcess(Request $request)
    {
        $request->validate(Blogpost::CREATE_RULES, Blogpost::CREATE_MESSAGES);

        $data = $request->only(['category', 'title', 'summary', 'cover', 'content', 'author_id']);

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('covers');
        }

        Blogpost::create($data);

        return redirect()
            ->route('admin.blog')
            ->with('status.message', 'El post "' . e($data['title']) . '" se publicó con éxito.');
    }

    public function editForm(int $id)
    {
        return view('admin/blog/edit', [
            'post' => Blogpost::findOrFail($id),
            'authors' => Author::all()
        ]);
    }

    public function editProcess(int $id, Request $request)
    {

        $post = Blogpost::findOrFail($id);

        $request->validate(Blogpost::EDIT_RULES, Blogpost::CREATE_MESSAGES);

        $data = $request->only(['category', 'title', 'summary', 'cover', 'content', 'author_id']);

        $oldCover = $post->cover;

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('covers');
        }

        $post->update($data);

        // Eliminamos la portada anterior, si la cambiaron.
        if ($request->hasFile('cover') && !empty($oldCover) && Storage::has($oldCover)) {
            Storage::delete($oldCover);
        }

        return redirect()
            ->route('admin.blog')
            ->with('status.message', 'El post "' . e($data['title']) . '" se editó con éxito.');
    }

    public function deleteForm(int $id)
    {
        return view('admin/blog/delete', [
            'post' => Blogpost::findOrFail($id),
        ]);
    }

    public function deleteProcess(int $id)
    {
        $post = Blogpost::findOrFail($id);

        $exists = Storage::disk('public')->exists($post->cover);

        if ($exists) {
            Storage::disk('public')->delete($post->cover);
        }

        $post->delete();

        return redirect()
            ->route('admin.blog')
            ->with('status.message', 'El post "' . e($post['title']) . '" se eliminó con éxito.');
    }
}
