<?php 
    use Illuminate\Support\Str; 
?>

@extends('layouts.main')

@section('title', $post->title)


@section('content')

<section class="container mt-64 mb-64">
    <p class="subtitle subtitle-center-lines text-center">{{ $post->category }}</p>
    <h1 class="h1 h1-bigger text-center max-600 m-0-auto mt-20 mb-24">{{ $post->title }}</h1>
    <p class="paragraph mb-8 text-center max-600 m-0-auto mb-24">{{ $post->summary }}</p>
    <p class="text-center paragraph-color-text bold mb-64">Por {{ $post->author->name }}</p>

    <div class="blog-img-container mb-64">
            @if(Str::of($post->cover)->startsWith('https'))
                <img src="{{ $post->cover }}" alt="{{ $post->title }}" class="blog-img">
            @else
                <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}" class="blog-img">
            @endif
    </div>

    <p class="blog-content paragraph m-0-auto">{{ $post->content }}</p>
  
</section>

<section class="container mb-64 mb-201 author-info">
    <h2 class="h3 mb-16">Sobre el autor</h2>

    <div class="blog-author">
        <img src="{{ $post->author->profile_pic }}" alt="{{ $post->author->name }}" class="author-img">
        <div>
            <h3 class="author-name">{{ $post->author->name }}</h3>
            <p class="author-career">{{ $post->author->profession }}</p>
            <p class="paragraph">{{ $post->author->bio }}</p>
        </div>
    </div>
</section>

@endsection