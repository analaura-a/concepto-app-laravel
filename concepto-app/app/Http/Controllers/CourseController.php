<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::with('category')->get();

        return view('web/courses', [
            'courses' => $courses,
        ]);
    }

    public function courseDetail(int $id)
    {
        return view('web/course_detail', [
            'course' => Course::findOrFail($id),
        ]);
    }
}
