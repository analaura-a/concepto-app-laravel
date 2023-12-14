@extends('layouts.main')

@section('title', 'Concepto — Iniciar sesión')

@section('content')

    <section class="container mt-100 mb-100 mb-201">

        <h1 class="h1 h1-bigger text-center mb-64">Iniciar sesión</h1>

        <div class="checkout-form m-0-auto">

            <form action="<?= route('auth.web.login.process') ?>" method="post" id="form-checkout">
                @csrf

                <div class="form-input">
                    <label for="username">Nombre de usuario<span class="primary-color-text">*</span></label>
                    <input type="text" id="username" name="username" placeholder="Usuario"
                        @error('username') aria-describedby="error-username" @enderror value="{{ old('username') }}">
                    @error('username')
                        <p class="text-danger" id="error-username">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-input">
                    <label for="password">Contraseña<span class="primary-color-text">*</span></label>
                    <input type="password" id="password" name="password" placeholder="**********"
                        @error('password') aria-describedby="error-password" @enderror>
                    @error('password')
                        <p class="text-danger" id="error-password">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Iniciar sesión" class="main-cta mt-32">

            </form>

            <div class="btn-register">
                <p>¿Aun no tienes cuenta?</p>
                <a href="{{ url('/registrar') }}">Registrarse</a>
            </div>

        </div>

    </section>

@endsection