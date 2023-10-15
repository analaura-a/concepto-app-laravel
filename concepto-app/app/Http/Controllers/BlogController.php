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
}
