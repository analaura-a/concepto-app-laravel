@extends('layouts.main')

@section('title', $post->title)


@section('content')

<section class="container mt-64 mb-64">
    <p class="subtitle subtitle-center-lines text-center">{{ $post->category }}</p>
    <h1 class="h1 h1-bigger text-center max-600 m-0-auto mt-20 mb-24">{{ $post->title }}</h1>
    <p class="paragraph mb-8 text-center max-600 m-0-auto mb-24">{{ $post->summary }}</p>
    <p class="text-center paragraph-color-text bold mb-64">Por Ana Laura Almirón</p>

    <div class="blog-img-container mb-64">
        <img src="{{ $post->cover }}" alt="{{ $post->title }}" class="blog-img">
    </div>

    <p class="blog-content paragraph m-0-auto">{{ $post->content }}</p>
  
</section>

<section class="container mb-64 mb-201 author-info">
    <h2 class="h3 mb-16">Sobre el autor</h2>

    <div class="blog-author">
        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" class="author-img">
        <div>
            <h3 class="author-name">Ana Laura Almirón</h3>
            <p class="author-career">UX/UI Designer</p>
            <p class="paragraph">Comenzar con la búsqueda de tu primer trabajo de programador si no tenés experiencia puede ser difícil. Existe bastante competencia ya que muchos compiten por el mismo puesto que vos. Pero, ¿cómo lograr ser elegido de entre todos los demás candidatos?</p>
        </div>
    </div>
</section>

@endsection