@extends('layouts.main')

@section('title', 'Concepto — Mis cursos')

@section('content')

    <section class="container mt-32 mt-d-56 mb-100">
        <h1 class="h1 h1-bigger mb-40 mb-d-56">Mis cursos</h1>

        @if ($courses->isEmpty())
            <div id="no-courses">
                <div class="empty-cart m-0-auto">
                    <div class="icon-container mb-32 mt-64 m-0-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 48 48" fill="none">
                            <path fill="#a6b5ed" fill-rule="evenodd"
                                d="m27.067 10.758.003.002 7.982 5.237a4.974 4.974 0 0 1 2.23 4.709V28a.75.75 0 0 1-1.5 0v-4.223c-.22.21-.463.405-.73.58l-1.795 1.178v6.156c0 1.032-.394 2.059-.994 2.893-.6.834-1.448 1.533-2.425 1.858l-4.261 1.416c-.47.151-1.044.216-1.582.216-.537 0-1.108-.064-1.575-.217l-.003-.001-4.253-1.413c-.977-.326-1.825-1.025-2.426-1.859-.6-.834-.994-1.86-.994-2.893l.013-6.162-1.793-1.17c-3.027-1.976-3.027-6.4 0-8.376l8.024-5.239h.001c.87-.571 1.975-.833 3.04-.832 1.064.002 2.17.268 3.038.846Zm8.73 9.101a.753.753 0 0 0-.014.141v.619a3.467 3.467 0 0 1-1.554 2.485l-7.987 5.24c-.57.375-1.373.587-2.215.587-.842 0-1.644-.212-2.215-.587l-8.028-5.241c-2.12-1.384-2.12-4.48 0-5.864l8.026-5.24.002-.002c.571-.375 1.372-.586 2.214-.585.841.002 1.641.216 2.212.596l.004.003 7.987 5.24a3.469 3.469 0 0 1 1.567 2.608Zm-8.731 9.738 4.691-3.078v5.172c0 .66-.259 1.387-.712 2.017-.453.629-1.058 1.103-1.681 1.311l-4.25 1.412c-.276.088-.681.143-1.119.143-.438 0-.84-.055-1.107-.142h-.001l-4.25-1.413-2.384-7.872.002-.64 4.733 3.09.001.001c.87.571 1.974.833 3.038.833 1.064 0 2.17-.262 3.039-.834Zm-10.813-2.45 2.385 7.872c-.623-.207-1.23-.682-1.682-1.311-.453-.63-.712-1.356-.712-2.016l.01-4.545Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2 class="h2 mb-16">Parece que todavía no compraste ningún curso</h2>
                    <p class="paragraph mb-32">Date una vuelta por nuestro catálogo y animate a sumar nuevas habilidades a
                        tu perfil profesional.</p>
                    <a class="main-cta m-0-auto mb-100" href="<?= route('web.courses') ?>">
                        <p>Explorar catálogo</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                            fill="none">
                            <path fill="#fff"
                                d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        @else
            <ul class="container-cards" id="container-courses">
                @foreach ($courses as $course)
                    <li class="course-card">
                        <a class="anchor-detail" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" target="_blank">
                            <div class="card-img">
                                @if (Str::of($course->cover)->startsWith('https'))
                                    <img src="{{ $course->cover }}" alt="{{ $course->name }}">
                                @else
                                    <img src="{{ asset('storage/' . $course->cover) }}" alt="{{ $course->name }}">
                                @endif
                            </div>
                            <div class="card-content">
                                {{-- <p class="card-content-category mb-8">{{ $course->category->name }}</p> --}}
                                <h3 class="h3 mb-4">{{ $course->name }}</h3>
                                <p class="card-content-paragraph mb-12">{{ $course->short_description }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>

        @endif
    </section>

@endsection
