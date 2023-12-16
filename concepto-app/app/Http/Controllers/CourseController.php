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
        $course = Course::findOrFail($id);

        $tagsString = $course->tags;
        $tagsArray = explode('.', $tagsString);

        $learningsString = $course->learnings;
        $learningsArray = explode('.', $learningsString);

        return view('web/course_detail', [
            'course' => $course,
        ], compact('tagsArray', 'learningsArray'));
    }
}
