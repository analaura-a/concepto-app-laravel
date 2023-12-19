<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('web/home');
    }

    public function profile()
    {
        return view('web.profile');
    }

    public function myCourses()
    {
        return view('web.my_courses');
    }
}
