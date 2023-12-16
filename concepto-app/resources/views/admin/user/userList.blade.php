@extends('layouts.admin')

@section('title', 'Concepto — Listado de usuarios')

@section('content')

    <section class="container mt-100 mb-100">

        <div class="title-with-button mb-64">
            <h1 class="h1 h1-bigger max-600">Listado de usuarios</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Correo electrónico</th>
                        <th>Acciones</th>
                    </tr>

                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>

                            <td>
                                <a href="{{ url('/admin/usuarios/' . $user->id) }}" class="btn btn-primary">Ver detalle</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </section>

@endsection