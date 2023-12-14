@extends('layouts.admin')

@section('title', 'Concepto — Listado de usuarios')

@section('content')

    <section class="container mt-100 mb-100">

        <div class="title-with-button mb-64">
            <h1 class="h1 h1-bigger max-600">Listado de Usuarios</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Servicio Contratado</th>
                        <th>Acción</th>
                    </tr>

                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->service->name }}</td>


                            <td>
                                <a href="{{ url('/admin/usuarios/' . $user->id) }}" class="btn btn-primary">Ver</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </section>

@endsection