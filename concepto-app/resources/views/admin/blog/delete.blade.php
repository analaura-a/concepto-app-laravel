@extends('layouts.admin')

@section('title', 'Concepto — Eliminar entrada del blog: '. $post->title)


@section('content')

<section class="container mt-100 mb-100">

    <h1 class="h1 text-center mb-32">Confirmación para eliminar la entrada: "{{$post->title}}"</h1>
    <p class="paragraph text-center bold m-0-auto mb-8">Resumen:</p>
    <p class="paragraph mb-8 text-center max-600 m-0-auto mb-32">{{ $post->summary }}</p>
    <p class="text-center paragraph-color-text bold mb-100">Por {{ $post->author->name }}</p>

    <h2 class="h3 text-center">¿De verdad quieres eliminar esta entrada del blog?</h2>
    <form action="{{ route('admin.blog.delete.process', ['id' => $post->id]) }}" method="post" id="form-checkout">
        @csrf
        <input type="submit" value="Eliminar entrada" class="main-cta mt-32 max-600 m-0-auto">
    </form>

</section>

@endsection