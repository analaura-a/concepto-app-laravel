<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list()
    {

        $posts = Blogpost::all();

        // Debugbar::info($posts);

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
        $posts = Blogpost::all();

        return view('admin/blog/bloglist', [
            'posts' => $posts,
        ]);
    }

    public function createForm()
    {
        return view('admin/blog/create');
    }

    public function createProcess(Request $request)
    {
        $request->validate(Blogpost::CREATE_RULES, Blogpost::CREATE_MESSAGES);

        $data = $request->only(['category', 'title', 'summary', 'cover', 'content']);

        Blogpost::create($data);

        return redirect()
            ->route('admin.blog')
            ->with('status.message', 'El post "' . e($data['title']) . '" se publicó con éxito.');
    }

    public function editForm(int $id)
    {
        return view('admin/blog/edit', [
            'post' => Blogpost::findOrFail($id),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {

        $post = Blogpost::findOrFail($id);

        $request->validate(Blogpost::CREATE_RULES, Blogpost::CREATE_MESSAGES);

        $data = $request->only(['category', 'title', 'summary', 'cover', 'content']);

        $post->update($data);

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

        $post->delete();

        return redirect()
            ->route('admin.blog')
            ->with('status.message', 'El post "' . e($post['title']) . '" se eliminó con éxito.');
    }
    
}
