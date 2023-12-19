@extends('layouts.main')

@section('title', 'Concepto — Ocurrió un error al realizar la compra')

@section('content')

    <section class="container status mt-32 mt-d-56 mb-32 mb-d-56">

        <div class="empty-cart m-0-auto" id="container-state">
            <div class="icon-container mb-32 mt-64 m-0-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                    <path stroke="#3E58FF" stroke-linecap="round" stroke-width="3"
                        d="m25.854 31.147-3.667-3.667m3.626.04-3.666 3.667m-2.4-20.52-4.827 4.84m13.333-4.84 4.827 4.84m-20.413 5.826 1.88 11.52c.426 2.587 1.453 4.48 5.266 4.48h8.04c4.147 0 4.76-1.813 5.24-4.32l2.24-11.68m-24.666-2.866c0-2.467 1.32-2.667 2.96-2.667h20.746c1.64 0 2.96.2 2.96 2.667 0 2.867-1.32 2.667-2.96 2.667H13.627c-1.64 0-2.96.2-2.96-2.667Z" />
                </svg>
            </div>
            <h2 class="h2 mb-16">¡Oh, no! La compra no se pudo completar</h2>
            <p class="paragraph mb-32">Ocurrió un error mientras se intentaba realizar la transacción.<br>Por favor,
                inténtelo de nuevo más tarde.</p>
            <a class="main-cta m-0-auto mb-100" href="<?= route('web.cart') ?>">
                <p>Volver al carrito</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path fill="#fff"
                        d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z">
                    </path>
                </svg>
            </a>
        </div>

    </section>

@endsection