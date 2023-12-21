<?php

use Illuminate\Support\Str;

$total = 0;

if (session('cart')) {
    foreach (session('cart') as $course) {
        $total += $course['price'];
    }
}

$cart = session()->get('cart', []);
if (empty($cart)) {
    $empty = true;
} else {
    $empty = false;
}

?>

@extends('layouts.main')

@section('title', 'Concepto - Carrito')


@section('content')

    <section class="container mt-32 mt-d-56 mb-32 mb-d-56">

        <h1 class="h1 h1-bigger mb-4">Mi carrito</h1>
        <p id="cart-counter" class="mb-40 mb-d-56">{{ count((array) session('cart')) }} items</p>

        <div id="cart">

            @if (session('cart'))
                <div class="cart-container">

                    <div class="cart-courses">
                        <ul class="cart-container-cards mb-56" id="cart-container">

                            @foreach (session('cart') as $item)
                                <li>
                                    <img class="cart-card-img" src="<?= url('assets/' . $item['cover']) ?>"
                                        alt="{{ $item['name'] }}">
                                    <div class="cart-card-info">
                                        <div>
                                            <h2>{{ $item['name'] }}</h2>
                                            <p>Por {{ $item['teacher'] }}</p>
                                        </div>
                                        <p>${{ $item['price'] }}</p>
                                    </div>
                                    <a href="{{ route('web.cart.deleteOne', ['id' => $item['id']]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                            viewBox="0 0 48 48" fill="none" id="delete-3"
                                            class="svg-medium delete-cart-button">
                                            <path stroke="#4b5b77" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M36 15.973c-4.44-.44-8.907-.666-13.36-.666-2.64 0-5.28.133-7.92.4l-2.72.266m7.333-1.346.294-1.747c.213-1.267.373-2.213 2.626-2.213h3.494c2.253 0 2.426 1 2.626 2.226l.294 1.734m4.466 5.56-.866 13.426c-.147 2.094-.267 3.72-3.987 3.72h-8.56c-3.72 0-3.84-1.626-3.987-3.72l-.866-13.426M21.773 30h4.44m-5.546-5.333h6.666">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <a href="<?= route('web.cart.delete') ?>" id="empty-cart">Vaciar carrito</a>
                    </div>

                    <div class="cart-summary">
                        <h2 class="h2 pb-32 separador">Resumen</h2>
                        <div class="pb-32 pt-32 separador">
                            <div class="subtotal flex-total mb-8">
                                <p>Subtotal</p>
                                <p id="subtotal">${{ $total }}</p>
                            </div>
                            <div class="subtotal flex-total">
                                <p>Descuentos</p>
                                <p>$0</p>
                            </div>
                        </div>
                        <div class="total flex-total pt-32 pb-32">
                            <p>Total a pagar</p>
                            <p id="total">${{ $total }}</p>
                        </div>

                        <div id="checkout"></div>
                    </div>
                </div>

        </div>
    @else
        <div class="empty-cart m-0-auto">
            <div class="icon-container mb-32 mt-64 m-0-auto"><svg xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 48 48" fill="none">
                    <path stroke="#a6b5ed" stroke-linecap="round" stroke-width="2"
                        d="m7 8.65 2.8.56a2 2 0 0 1 1.597 1.762l.363 3.628m0 0 1.829 15.238a2 2 0 0 0 1.985 1.762h18.443a3.5 3.5 0 0 0 3.396-2.651l2.873-11.491a2.3 2.3 0 0 0-2.232-2.858H11.76Z">
                    </path>
                    <path stroke="#a6b5ed" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18.9 26.5h6.8"></path>
                    <path fill="#a6b5ed"
                        d="M20.6 37.55a2.55 2.55 0 1 1-5.1 0 2.55 2.55 0 0 1 5.1 0ZM35.9 37.55a2.55 2.55 0 1 1-5.1 0 2.55 2.55 0 0 1 5.1 0Z">
                    </path>
                </svg></div>
            <h2 class="h2 mb-16">¡Ups! Parece que todavía no agregaste nada</h2>
            <p class="paragraph mb-32">Date una vuelta por nuestro catálogo y elegí tus cursos favoritos.</p><a
                class="main-cta m-0-auto mb-100" href="<?= route('web.courses') ?>">
                <p>Explorar</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path fill="#fff"
                        d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z">
                    </path>
                </svg>
            </a>
        </div>
        @endif

        </div>

    </section>

    @if ($empty != true)
        <script src="https://sdk.mercadopago.com/js/v2"></script>
        <script>
            const mp = new MercadoPago('<?= $mpPublicKey ?>');
            const bricksBuilder = mp.bricks().create('wallet', 'checkout', {
                initialization: {
                    preferenceId: '<?= $preference->id ?>',
                }
            });
        </script>
    @endif

@endsection
