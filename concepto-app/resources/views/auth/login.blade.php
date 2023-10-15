@extends('layouts.admin')

@section('title', 'Concepto — Iniciar sesión')

@section('content')

<section class="container mt-100 mb-100 mb-201">

    <h1 class="h1 h1-bigger text-center mb-64">Iniciar sesión</h1>

    <div class="checkout-form m-0-auto">

        <form action="#" method="post" id="form-checkout">
            @csrf

            <div class="form-input">
                <label for="username">Nombre de usuario<span class="primary-color-text">*</span></label>
                <input type="text" id="username" name="username" placeholder="Usuario" required>
            </div>

            <div class="form-input">
                <label for="password">Contraseña<span class="primary-color-text">*</span></label>
                <input type="password" id="password" name="password" placeholder="**********" required>
            </div>

            <input type="submit" value="Iniciar sesión" class="main-cta mt-32">

        </form>

</section>

@endsection
