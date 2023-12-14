@extends('layouts.admin')

@section('title', $user->email)

@section('content')

    <section class="container mt-64 mb-64">
        <p class="subtitle subtitle-center-lines text-center">Información</p>
        <img src="<?= url('assets/svg/favicon.svg') ?>" alt="{{ $user->email }}" class="detail-img-user">
        <h1 class="h1 h1-bigger text-center max-600 m-0-auto mt-20 mb-24">{{ $user->email }}</h1>
        {{-- <p class="paragraph mb-8 text-center max-600 m-0-auto mb-24">Email : {{ $user->email }}</p> --}}
    </section>



    <section class="container mb-64 service-info">

        <h2 class="h3 mb-16">Servicio Contratado</h2>
        <div>
            <div>
                <h3 class="author-name">Plan : {{ $user->service->name }}</h3>
                <p class="paragraph">{{ $user->service->description }}</p>
                <p class="text-center paragraph-color-text bold mb-64"> Precio : ${{ $user->service->price }}/mes</p>
            </div>
        </div>

    </section>

@endsection
