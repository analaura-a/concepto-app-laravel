<?php

use Illuminate\Support\ViewErrorBag;

?>

@extends('layouts.admin')

@section('title', 'Concepto — Editar entrada del blog: ' . $post->title)


@section('content')

    <section class="container mt-100 mb-100">


        <h1 class="h1 h1-bigger text-center mb-64">Editar una entrada del blog</h1>

        <div class="checkout-form m-0-auto">

            @if ($errors->any())
                <p class="text-danger mb-3">Hay errores en los datos del formulario. ¡Por favor, revisalos para corregirlos!
                </p>
            @endif

            <form action="<?= route('admin.blog.edit.process', ['id' => $post->id]) ?>" method="post"
                enctype="multipart/form-data" id="form-checkout">
                @csrf

                <div class="form-input">
                    <label for="category">Categoría<span class="primary-color-text">*</span></label>
                    <input type="text" id="category" name="category" placeholder="Categoría"
                        @error('category') aria-describedby="error-category" @enderror
                        value="{{ old('category', $post->category) }}">
                    @error('category')
                        <p class="text-danger" id="error-category">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-input">
                    <label for="title">Título<span class="primary-color-text">*</span></label>
                    <input type="text" id="title" name="title" placeholder="Título"
                        @error('title') aria-describedby="error-title" @enderror value="{{ old('title', $post->title) }}">
                    @error('title')
                        <p class="text-danger" id="error-title">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-input">
                    <label for="summary">Breve resumen<span class="primary-color-text">*</span></label>
                    <textarea id="summary" name="summary" rows="5" placeholder="Esta publicación habla de..."
                        @error('summary') aria-describedby="error-summary" @enderror>{{ old('summary', $post->summary) }}</textarea>
                    @error('summary')
                        <p class="text-danger" id="error-summary">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-input">
                    <label for="cover">Portada<span class="primary-color-text">*</span></label>
                    <input type="file" id="cover" name="cover"
                        @error('cover') aria-describedby="error-cover" @enderror>
                    @error('cover')
                        <p class="text-danger" id="error-cover">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-input">
                    <p class="label-form-style">Portada actual</p>
                    @if ($post->cover !== null)
                        @if (Str::of($post->cover)->startsWith('https'))
                            <img src="{{ $post->cover }}" alt="{{ $post->title }}" class="img-fluid">
                        @else
                            <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}" class="img-fluid">
                        @endif
                    @else
                        No hay una imagen de portada para este blogpost.
                    @endif
                </div>

                <div class="form-input">
                    <label for="content">Contenido<span class="primary-color-text">*</span></label>
                    <textarea id="content" name="content" rows="20" placeholder="Escribe aquí el contenido de la publicación."
                        @error('content') aria-describedby="error-content" @enderror>{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <p class="text-danger" id="error-content">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-input">
                    <label for="author_id">Autor/a<span class="primary-color-text">*</span></label>
                    <select id="author_id" name="author_id"
                        @error('author_id') aria-describedby="error-author_id" @enderror>

                        <option value="">Seleccioná el/la autor/a</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" @selected($author->id == old('author_id', $post->author_id))>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('author_id')
                        <p class="text-danger" id="error-author_id">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Actualizar entrada" class="main-cta mt-32">

            </form>

    </section>

@endsection
