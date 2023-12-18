@extends('layouts.main')

@section('title', 'Concepto — Mi Perfil')

@section('content')
<section class="container mt-100 mb-100">

    <h1 class="h1 h1-bigger text-center mb-56">Mi perfil</h1>
    <p class="h3 mb-4 profile">Bienvenido, <?= auth()->user()->email ?></p>

    <ul class="content-profile-btn">
    <li class="li-btn-profile">
            <a href="#" class="btn-profile">Modificar mis datos</a>
        </li>
        <li class="li-btn-profile">
            <a href="#" class="btn-profile">Cursos comprados</a>
        </li>
        <li class="li-btn-profile">
            <form action="{{ route('auth.web.logout.process') }}" method="post">
            @csrf
            <button type="submit" class="btn-logout">Cerrar Sesion</button>
            </form>
            <!-- <a href="{{ route('auth.web.logout.process') }}" class="btn-logout">Cerrar Sesion</a> -->
        </li>


    </ul>




</section>


@endsection