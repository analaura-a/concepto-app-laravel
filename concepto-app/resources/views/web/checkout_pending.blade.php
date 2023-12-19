@extends('layouts.main')

@section('title', 'Concepto — Compra pendiente')

@section('content')

    <section class="container status mt-32 mt-d-56 mb-32 mb-d-56">

        <div class="empty-cart m-0-auto" id="container-state">
            <h2 class="h2 mb-16">Tu compra quedó pendiente.</h2>
            <p class="paragraph mb-32">Podrás acceder al material de los cursos una vez que la transacción sea completada. Te enviaremos los detalles a tu mail.</p>
            <a class="main-cta m-0-auto mb-100" href="<?= route('web.courses') ?>">
                <p>Seguir comprando</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path fill="#fff"
                        d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z">
                    </path>
                </svg>
            </a>
        </div>

    </section>

@endsection
