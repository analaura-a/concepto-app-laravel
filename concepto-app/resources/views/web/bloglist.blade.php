<?php 
    use Illuminate\Support\Str; 
?>

@extends('layouts.main')

@section('title', 'Concepto — Blog')


@section('content')

<section class="container w-100 mt-32 categorias pb-32">
    <p class="subtitle subtitle-center-lines text-center">Nuestro blog</p>
    <h1 class="h1 h1-bigger text-center max-600 m-0-auto mt-8 mb-24">Encontrá los mejores consejos para potenciar tu carrera profesional</h1>
    <p class="paragraph mb-8 text-center max-600 m-0-auto mb-40">
        Desde nuestros tutoriales hasta nuestro blog, en concepto estamos comprometidos con la idea de crear continuamente contenido de calidad para ayudarte a crecer profesionalmente. 
    </p>
</section>

<section class="container mb-200" id="seccionTendencias">

    <ul class="container-cards mb-56">

        @foreach($posts as $post)
        <li class="course-card">   
           <a href="<?= route('web.blog.post', ['id' => $post->id]) ?>">
                <div class="card-img">
                    @if(Str::of($post->cover)->startsWith('https'))
                        <img src="{{ $post->cover }}" alt="{{ $post->title }}">
                    @else
                        <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}">
                    @endif
                </div>
                <div class="card-content">
                    <p class="card-content-category mb-8">{{ $post->category }}</p>
                    <h3 class="h3 mb-4">{{ $post->title }}</h3>
                    <p class="mb-8 paragraph-color-text bold">Por {{ $post->author->name }}</p>
                    <p class="card-content-paragraph mb-12">{{ $post->summary }}</p>
                </div>
           </a>
        </li>
        @endforeach

    </ul>

</section>

@endsection