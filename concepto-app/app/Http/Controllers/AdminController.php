<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $bestSellingCourses = Course::select('courses.course_id', 'courses.name', 'courses.cover', 'courses.short_description', 'courses.description', 'courses.price', DB::raw('COUNT(purchase_details.id) as total_sales'))
            ->leftJoin('purchase_details', 'courses.course_id', '=', 'purchase_details.course_id')
            ->groupBy('courses.course_id', 'courses.name', 'courses.cover', 'courses.short_description', 'courses.description', 'courses.price')
            ->orderBy('total_sales', 'desc') // Ordena por total de ventas en orden ascendente
            ->get();

        return view('admin/home', [
            'courses' => $bestSellingCourses,
        ]);
    }
}
