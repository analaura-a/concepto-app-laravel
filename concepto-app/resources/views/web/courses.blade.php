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
                    <a class="anchor-detail" href="<?= route('web.courses.detail', ['id' => $course->course_id]) ?>">
                        <div class="card-img">
                            <img src="<?= url('assets/'. $course->cover) ?>" alt="{{ $course->name }}">
                        </div>
                        <div class="card-content">
                            <p class="card-content-category mb-8">{{ $course->category->name }}</p>
                            <h3 class="h3 mb-4">{{ $course->name }}</h3>
                            <p class="card-content-paragraph mb-12">{{ $course->short_description }}</p>
                            <p class="card-content-price">${{ $course->price  }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

@endsection
