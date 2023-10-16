@extends('layouts.admin')

@section('title', 'Concepto — Administrar entradas del blog')

@section('content')

<section class="container mt-100 mb-100">

   <div class="title-with-button mb-64">
       <h1 class="h1 h1-bigger max-600">Listado de entradas del blog</h1>
       <a href="<?= route('admin.blog.create.form'); ?>" class="main-cta main-cta-larger">
            <p>Publicar una nueva entrada</p>
       </a>
   </div>

   <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>

                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor/a</th>
                    <th>Acciones</th>
                </tr>

            </thead>
            <tbody>

                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>    
                    <td>{{ $post->author->name }}</td>    
                    <td>
                        <a href="<?= route('web.blog.post', ['id' => $post->id]) ?>" class="btn btn-primary">Ver</a>
                        <a href="<?= route('admin.blog.edit.form', ['id' => $post->id]) ?>" class="btn btn-secondary">Editar</a>
                        <a href="<?= route('admin.blog.delete.form', ['id' => $post->id]) ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
   </div>

</section>

@endsection