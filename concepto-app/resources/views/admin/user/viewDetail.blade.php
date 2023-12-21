@extends('layouts.admin')

@section('title', $user->email)

@section('content')

    <section class="container mt-64 mb-64">
        <p class="subtitle subtitle-center-lines text-center">Información</p>
        <img src="<?= url('assets/svg/favicon.svg') ?>" alt="Logo de Concepto" class="detail-img-user">
        <h1 class="h1 h1-bigger text-center max-600 m-0-auto mt-20 mb-24">{{ $user->email }}</h1>
    </section>



    <section class="container mb-64 service-info">

        <h2 class="h3 mt-20 mb-48 text-center">Historial de compra</h2>

        @if ($courses->isEmpty())
            <div id="no-courses">
                <div class="empty-cart m-0-auto">
                    <div class="icon-container mb-32 mt-64 m-0-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 48 48"
                            fill="none">
                            <path fill="#a6b5ed" fill-rule="evenodd"
                                d="m27.067 10.758.003.002 7.982 5.237a4.974 4.974 0 0 1 2.23 4.709V28a.75.75 0 0 1-1.5 0v-4.223c-.22.21-.463.405-.73.58l-1.795 1.178v6.156c0 1.032-.394 2.059-.994 2.893-.6.834-1.448 1.533-2.425 1.858l-4.261 1.416c-.47.151-1.044.216-1.582.216-.537 0-1.108-.064-1.575-.217l-.003-.001-4.253-1.413c-.977-.326-1.825-1.025-2.426-1.859-.6-.834-.994-1.86-.994-2.893l.013-6.162-1.793-1.17c-3.027-1.976-3.027-6.4 0-8.376l8.024-5.239h.001c.87-.571 1.975-.833 3.04-.832 1.064.002 2.17.268 3.038.846Zm8.73 9.101a.753.753 0 0 0-.014.141v.619a3.467 3.467 0 0 1-1.554 2.485l-7.987 5.24c-.57.375-1.373.587-2.215.587-.842 0-1.644-.212-2.215-.587l-8.028-5.241c-2.12-1.384-2.12-4.48 0-5.864l8.026-5.24.002-.002c.571-.375 1.372-.586 2.214-.585.841.002 1.641.216 2.212.596l.004.003 7.987 5.24a3.469 3.469 0 0 1 1.567 2.608Zm-8.731 9.738 4.691-3.078v5.172c0 .66-.259 1.387-.712 2.017-.453.629-1.058 1.103-1.681 1.311l-4.25 1.412c-.276.088-.681.143-1.119.143-.438 0-.84-.055-1.107-.142h-.001l-4.25-1.413-2.384-7.872.002-.64 4.733 3.09.001.001c.87.571 1.974.833 3.038.833 1.064 0 2.17-.262 3.039-.834Zm-10.813-2.45 2.385 7.872c-.623-.207-1.23-.682-1.682-1.311-.453-.63-.712-1.356-.712-2.016l.01-4.545Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2 class="h2 mb-16">{{ $user->email }} aún no ha comprado ningún curso.</h2>
                    <p class="paragraph mb-32">Este usuario no cuenta con ninguna compra asociada a su cuenta.</p>
                </div>
            </div>
        @else
            <ul class="container-cards" id="container-courses">
                @foreach ($courses as $course)
                    <li class="course-card">
                        <a class="anchor-detail" href="<?= route('web.courses.detail', ['id' => $course->course_id]) ?>"
                            target="_blank">
                            <div class="card-img">
                                <img src="<?= url('assets/' . $course->cover) ?>" alt="{{ $course->name }}">
                            </div>
                            <div class="card-content">
                                <h3 class="h3 mb-4">{{ $course->name }}</h3>
                                <p class="card-content-paragraph mb-12">{{ $course->short_description }}</p>
                                <p class="paragraph fs-6 text-secondary">Comprado el {{ $course->purchase_date }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>

        @endif

    </section>

@endsection
