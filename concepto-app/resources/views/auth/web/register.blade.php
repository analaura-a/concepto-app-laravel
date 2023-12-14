@extends('layouts.main')

@section('title', 'Concepto - Registrar un nuevo usuario')

@section('content')

    <section class="container mt-100 mb-100 mb-201">

        <h1 class="h1 h1-bigger text-center mb-64">Crear una cuenta</h1>

        <div class="checkout-form m-0-auto">

            <form action="{{ url('/registrar') }}" method="post" id="form-checkout">
                @csrf

                <div class="form-input">
                    <label for="email">Correo electrónico<span class="primary-color-text">*</span></label>
                    <input type="text" id="email" name="email" placeholder="ejemplo@gmail.com"
                        @error('email') aria-describedby="error-email" @enderror value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger" id="error-email">{{ $message }}</p>
                    @enderror
                </div>

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
                    <input type="password" class="mb-8" id="password" name="password" placeholder="**********"
                        @error('password') aria-describedby="error-password" @enderror>
                    <p class="paragraph-color-text">La contraseña debe contener mínimo 8 caracteres.</p>
                    @error('password')
                        <p class="text-danger" id="error-password">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Registrarse" class="main-cta mt-32">

            </form>

        </div>

    </section>

@endsection
