@extends('layouts.main')

@section('title', 'Concepto — Iniciar sesión')

@section('content')

    <section class="container mt-100 mb-100">

        <h1 class="h1 h1-bigger text-center mb-64">Iniciar sesión</h1>

        <div class="checkout-form m-0-auto">

            <form action="<?= route('auth.web.login.process') ?>" method="post" id="form-checkout">
                @csrf

                <div class="form-input">
                    <label for="email">Correo electrónico<span class="primary-color-text">*</span></label>
                    <input type="text" id="email" name="email" placeholder="Usuario"
                        @error('email') aria-describedby="error-email" @enderror value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger" id="error-email">{{ $message }}</p>
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
                <p class="paragraph">¿Aún no tenés una cuenta?</p>
                <a href="<?= route('auth.web.register') ?>" class="paragraph primary-color-text bold">Registrarse</a>
            </div>

        </div>

    </section>

@endsection
