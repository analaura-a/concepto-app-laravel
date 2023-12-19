<?php

use App\Models\Movie;
use Illuminate\Support\ViewErrorBag;

?>
@extends('layouts.main')

@section('title', 'Concepto — Editar Perfil')

@section('content')
<section class="container mt-100 mb-100">

    <h1 class="h1 h1-bigger text-center mb-56">Editar mi perfil</h1>

    <form action="{{url('perfil/'. auth()->user()->id. '/editar') }}" method="post">
        @csrf

        <div class="form-input">
            <label for="email">Correo electrónico<span class="primary-color-text">*</span></label>
            <input type="text" id="email" name="email" placeholder="Usuario"  value="{{ old('email', $user->email) }}">
        </div>

        <input type="submit" value="Editar" class="main-cta mt-32">

    </form>
</section>
@endsection