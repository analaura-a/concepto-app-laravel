<?php

use Illuminate\Support\Str;
?>

@extends('layouts.main')

@section('title', 'Concepto - Cursos')


@section('content')

    <section class="container mt-32 mb-100">

        <a href="<?= route('web.courses') ?>" class="go-back mb-32">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewbox="0 0 48 48">
                <path stroke="#3E4B62" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="1.5" d="m28 33.5-7.35-7.82c-.867-.924-.867-2.436 0-3.36L28 14.5" />
            </svg>
            <p class="back">Atrás</p>
        </a>

        <div class="course-container">
            <div class="course-information">

                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" target="_blank" class="mb-48">
                    <div id="course-image"
                        style="background:linear-gradient(180deg, rgba(42, 43, 46, 0.51) 73.31%, rgba(60, 61, 66, 0.37) 100%), url({{ $course->cover }}); background-repeat: no-repeat; background-position: center; background-size: cover;">
                    </div>
                </a>

                <p class="card-content-category mb-12" id="course-category">{{ $course->category->name }}</p>
                <h1 class="h1 h1-bigger mb-40" id="course-name">{{ $course->name }}</h1>

                <div class="course-professor mb-40">
                    <img id="course-professor-photo">
                    <div class="course-professor-info">
                        <p id="course-professor-name">Nombre del profesor</p>
                        <p id="course-professor-job">Profesión</p>
                    </div>
                </div>

                <div class="course-about mb-40">
                    <h2 class="h3 mb-12">Acerca del curso</h2>
                    <div id="course-about">
                        <p class='paragraph mb-8'>{{ $course->description }}</p>
                    </div>
                </div>

                <div class="course-learnings">
                    <h2 class="h3 mb-16">Qué vas a aprender</h2>
                    <ul id="course-learnings"></ul>
                </div>

            </div>


            <div class="course-sidebar">

                <div class="pb-40 separador">
                    <p id="course-price" class="mb-24">${{ $course->price }}</p><span class="price-money">ARS</span>

                    <ul class="course-bullet-points mb-32">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                                fill="none" class="svg-medium">
                                <path stroke="#3E58FF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="m26.246 12.877 2.288 4.614c.312.642 1.143 1.258 1.846 1.376l4.146.694c2.652.446 3.276 2.386 1.365 4.3l-3.224 3.25c-.546.55-.845 1.612-.676 2.372l.923 4.023c.728 3.185-.949 4.417-3.743 2.752l-3.887-2.32c-.702-.419-1.859-.419-2.574 0l-3.886 2.32c-2.782 1.665-4.472.42-3.744-2.752l.923-4.023c.169-.76-.13-1.822-.676-2.373l-3.223-3.25c-1.898-1.913-1.287-3.853 1.364-4.299l4.147-.694c.689-.118 1.52-.734 1.833-1.376l2.287-4.614c1.248-2.503 3.276-2.503 4.51 0Z" />
                            </svg>
                            <p id="course-rating" class="paragraph">{{ $course->rating }} puntuación promedio.</p>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                                fill="none" class="svg-medium">
                                <path stroke="#3E58FF" stroke-linecap="round" stroke-width="1.5"
                                    d="M33.043 23.234a4.547 4.547 0 1 0 0-9.094m4.98 19.468.445.063A2.218 2.218 0 0 0 41 31.475V29.98c0-.978-.615-1.85-1.536-2.18a19.1 19.1 0 0 0-2.804-.766m-21.702-3.8a4.547 4.547 0 1 1 0-9.094m-4.98 19.468-.446.063A2.218 2.218 0 0 1 7 31.475V29.98c0-.978.615-1.85 1.536-2.18a19.101 19.101 0 0 1 2.804-.766m7.233-9.747a5.787 5.787 0 1 0 11.574 0 5.787 5.787 0 0 0-11.574 0Zm9.606 18.63 4.026.575a2 2 0 0 0 2.283-1.98V31.66a2.945 2.945 0 0 0-1.954-2.774 24.298 24.298 0 0 0-16.345 0 2.945 2.945 0 0 0-1.955 2.774v2.852a2 2 0 0 0 2.283 1.98l4.026-.575a27.001 27.001 0 0 1 7.636 0Z" />
                            </svg>
                            <p id="course-students" class="paragraph">{{ $course->students }} personas lo tomaron.</p>
                        </li>
                    </ul>

                    <button class="main-cta" id="mainCTA">
                        <p id="main-cta-text">Agregar al carrito</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                            fill="none">
                            <path stroke="#fff" stroke-linecap="round" stroke-width="2"
                                d="m12.5 13.15 1.93.386a1.38 1.38 0 0 1 1.102 1.215l.25 2.502m0 0 1.261 10.507a1.38 1.38 0 0 0 1.37 1.215H31.13a2.413 2.413 0 0 0 2.341-1.828l1.98-7.924a1.586 1.586 0 0 0-1.538-1.97h-18.13Z" />
                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.706 25.459h4.688" />
                            <path fill="#fff"
                                d="M21.878 33.078a1.758 1.758 0 1 1-3.517 0 1.758 1.758 0 0 1 3.517 0ZM32.428 33.078a1.758 1.758 0 1 1-3.517 0 1.758 1.758 0 0 1 3.517 0Z" />
                        </svg>
                    </button>
                </div>

                <div class="pb-40 pt-40 separador">
                    <h2 class="h3 mb-12">Este curso incluye</h2>

                    <ul class="course-bullet-points">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                                fill="none" class="svg-medium">
                                <path stroke="#3E58FF" stroke-width="1.5"
                                    d="M37 24c0 7.18-5.82 13-13 13s-13-5.82-13-13 5.82-13 13-13 13 5.82 13 13Z" />
                                <path stroke="#3E58FF" stroke-width="1.5"
                                    d="M21.4 20.855a1.1 1.1 0 0 1 1.71-.915l4.717 3.145a1.1 1.1 0 0 1 0 1.83L23.11 28.06a1.1 1.1 0 0 1-1.71-.915v-6.29Z" />
                            </svg>
                            <p id="course-duration" class="paragraph">{{ $course->duration }} horas de video bajo demanda.</p>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                                fill="none" class="svg-medium">
                                <path stroke="#3E58FF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="m28.947 28.24-4.134-2.467c-.72-.426-1.306-1.453-1.306-2.293v-5.467M37.333 24c0 7.36-5.973 13.333-13.333 13.333S10.667 31.36 10.667 24 16.64 10.667 24 10.667 37.333 16.64 37.333 24Z" />
                            </svg>
                            <p class="paragraph">Acceso de por vida.</p>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                                fill="none" class="svg-medium">
                                <path stroke="#3E58FF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M24 29.333c.48 0 .947-.04 1.4-.12a9.314 9.314 0 0 0 6.373-4.026A9.29 9.29 0 0 0 33.333 20 9.327 9.327 0 0 0 24 10.667 9.327 9.327 0 0 0 14.667 20a9.29 9.29 0 0 0 1.56 5.187 9.314 9.314 0 0 0 6.373 4.026c.453.08.92.12 1.4.12Zm0 0 6.36 7.307c.707.84 2.067.52 2.32-.547l.467-1.96c.106-.493.493-.866.986-.986l2.2-.52c1.014-.24 1.374-1.507.64-2.227l-5.2-5.2a9.314 9.314 0 0 1-6.373 4.027c-.453.08-.92.12-1.4.12-.48 0-.947-.04-1.4-.12a9.314 9.314 0 0 1-6.373-4.027l-5.2 5.2c-.734.733-.374 2 .64 2.24l2.2.52c.48.107.866.493.986.987l.467 1.96c.253 1.066 1.613 1.386 2.32.546l6.36-7.32Zm.773-13.36.787 1.574a.966.966 0 0 0 .64.466l1.427.24c.906.147 1.12.814.466 1.467l-1.106 1.107a.945.945 0 0 0-.227.813l.32 1.373c.253 1.08-.32 1.507-1.28.934l-1.333-.787a.935.935 0 0 0-.88 0l-1.334.787c-.96.56-1.533.146-1.28-.934l.32-1.373c.054-.253-.04-.627-.226-.813L19.96 19.72c-.653-.653-.44-1.307.467-1.467l1.426-.24c.24-.04.52-.253.627-.466l.787-1.574c.386-.853 1.08-.853 1.506 0Z" />
                            </svg>
                            <p class="paragraph">Certificación al terminar.</p>
                        </li>
                    </ul>
                </div>

                <div class="pb-40 pt-40 separador">
                    <h2 class="h3 mb-12">Pre-requisitos</h2>
                    <div class="course-level mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"
                            fill="none" class="svg-medium">
                            <path stroke="#3E58FF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M14.19 20.791h-2.455a1.54 1.54 0 0 0-1.535 1.535v13.229c0 .844.69 1.535 1.535 1.535h2.455a1.54 1.54 0 0 0 1.535-1.535v-13.23a1.54 1.54 0 0 0-1.535-1.534ZM25.24 15.896h-2.456a1.54 1.54 0 0 0-1.534 1.534v18.125c0 .844.69 1.535 1.534 1.535h2.456a1.54 1.54 0 0 0 1.534-1.535V17.43a1.54 1.54 0 0 0-1.534-1.534ZM36.29 11h-2.455a1.54 1.54 0 0 0-1.535 1.535v23.02c0 .844.69 1.535 1.535 1.535h2.455a1.54 1.54 0 0 0 1.535-1.535v-23.02A1.54 1.54 0 0 0 36.29 11Z" />
                        </svg>
                        <p class="paragraph">Este curso es de nivel <span class="bold"
                                id="course-level">{{ $course->level }}</span>.</p>
                    </div>
                    <p id="course-requirements" class="paragraph">
                        {{ $course->requirements }}
                    </p>
                </div>

                <div class="pt-40">
                    <h2 class="h3 mb-12">Temas</h2>
                    <ul class="course-subjects" id="course-subjects">
                        @foreach ($tagsArray as $tag)
                            <li>{{ $tag }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

    </section>

@endsection
