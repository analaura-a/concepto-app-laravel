<?php

use Illuminate\Support\Str;
?>

@extends('layouts.main')

@section('title', 'Concepto - Cursos')


@section('content')

    <section class="container mt-32 mt-d-56 mb-100">
        <h1 class="h1 h1-bigger mb-40 mb-d-56">Conocé nuestros cursos</h1>
        <ul class="container-cards" id="container-courses">
            @foreach ($courses as $course)
                <li class="course-card">
                    <a class="anchor-detail" href="#">
                        <div class="card-img">
                            @if (Str::of($course->cover)->startsWith('https'))
                                <img src="{{ $course->cover }}" alt="{{ $course->name }}">
                            @else
                                <img src="{{ asset('storage/' . $course->cover) }}" alt="{{ $course->name }}">
                            @endif
                        </div>
                        <div class="card-content">
                            <p class="card-content-category mb-8">{{ $course->category->name }}</p>
                            <h3 class="h3 mb-4">{{ $course->name }}</h3>
                            <p class="card-content-paragraph mb-12">{{ $course->short_description }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

@endsection