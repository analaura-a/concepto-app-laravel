<?php

use Illuminate\Support\Str;
?>

@extends('layouts.main')

@section('title', 'Concepto - Carrito')


@section('content')

    <section class="container mt-32 mt-d-56 mb-32 mb-d-56">

        <h1 class="h1 h1-bigger mb-4">Mi carrito</h1>
        <p id="cart-counter" class="mb-40 mb-d-56">3 items</p>

        <div id="cart">

            @if (session('cart'))
                Hay productos en el carritoooooooooooooo
            @else
                No hay productos en el carritooooooooooo
            @endif

            <div class="cart-container">

                <div class="cart-courses">
                    <ul class="cart-container-cards mb-56" id="cart-container">

                        <li>
                            <img class="cart-card-img" src="../assets/png/course-responsive-grid.png"
                                alt="Cómo diseñar interfaces web responsive haciendo uso de grillas">
                            <div class="cart-card-info">
                                <div>
                                    <h2>Cómo diseñar interfaces web responsive haciendo uso de grillas</h2>
                                    <p>Por Julia Lopez</p>
                                </div>
                                <p>$4.300</p>
                            </div><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none" id="delete-3" class="svg-medium delete-cart-button">
                                <path stroke="#4b5b77" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M36 15.973c-4.44-.44-8.907-.666-13.36-.666-2.64 0-5.28.133-7.92.4l-2.72.266m7.333-1.346.294-1.747c.213-1.267.373-2.213 2.626-2.213h3.494c2.253 0 2.426 1 2.626 2.226l.294 1.734m4.466 5.56-.866 13.426c-.147 2.094-.267 3.72-3.987 3.72h-8.56c-3.72 0-3.84-1.626-3.987-3.72l-.866-13.426M21.773 30h4.44m-5.546-5.333h6.666">
                                </path>
                            </svg>
                        </li>

                        <li>
                            <img class="cart-card-img" src="../assets/png/course-three.png"
                                alt="Agregá animaciones 3D a tus webs con Three.js">
                            <div class="cart-card-info">
                                <div>
                                    <h2>Agregá animaciones 3D a tus webs con Three.js</h2>
                                    <p>Por Ricardo García</p>
                                </div>
                                <p>$10.200</p>
                            </div><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none" id="delete-6" class="svg-medium delete-cart-button">
                                <path stroke="#4b5b77" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M36 15.973c-4.44-.44-8.907-.666-13.36-.666-2.64 0-5.28.133-7.92.4l-2.72.266m7.333-1.346.294-1.747c.213-1.267.373-2.213 2.626-2.213h3.494c2.253 0 2.426 1 2.626 2.226l.294 1.734m4.466 5.56-.866 13.426c-.147 2.094-.267 3.72-3.987 3.72h-8.56c-3.72 0-3.84-1.626-3.987-3.72l-.866-13.426M21.773 30h4.44m-5.546-5.333h6.666">
                                </path>
                            </svg>
                        </li>

                    </ul>
                    <a href="<?= route('web.cart.delete') ?>" id="empty-cart">Vaciar carrito</a>
                </div>

                <div class="cart-summary">
                    <h2 class="h2 pb-32 separador">Resumen</h2>
                    <div class="pb-32 pt-32 separador">
                        <div class="subtotal flex-total mb-8">
                            <p>Subtotal</p>
                            <p id="subtotal">$14.500</p>
                        </div>
                        <div class="subtotal flex-total">
                            <p>Descuentos</p>
                            <p>$0</p>
                        </div>
                    </div>
                    <div class="total flex-total pt-32 pb-32">
                        <p>Total a pagar</p>
                        <p id="total">$14.500</p>
                    </div><a class="main-cta" href="#">
                        <p>Comprar ahora</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                            fill="none">
                            <path fill="#fff"
                                d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </section>

@endsection
