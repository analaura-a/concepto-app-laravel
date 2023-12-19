<?php

namespace App\Http\Controllers;

use App\Models\Purchase_detail;
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

    public function myCourses()
    {
        $userId = auth()->user()->id;

        $coursesPurchased = Purchase_detail::select('courses.*')
            ->join('courses', 'purchase_details.course_id', '=', 'courses.course_id')
            ->where('purchase_details.user_id', $userId)
            ->get();

        return view('web.my_courses', [
            'courses' => $coursesPurchased,
        ]);
    }
}
