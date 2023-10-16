<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="icon" href="assets/svg/favicon.svg" /> -->

    <!--Fonts-->
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,300,600,400,700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=switzer@600,800,900,700,400,300,500&display=swap" rel="stylesheet">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Custom CSS-->
    <link rel="stylesheet" href="<?= url('css/styles.css'); ?>">

</head>

<body>

    <header class="navbar m-0-auto">

        <div class="navbar-logo">
            <a href="<?= route('admin.home'); ?>">
                <img src="<?= url('assets/svg/logo-palabra.svg'); ?>" alt="Concepto logo">
            </a>
        </div>

        <button class="mobile-nav-toggle" id="nav-toggle" aria-expanded="false"></button>

        <nav>
            <ul id="primary-navigation" data-visible="false">
                <li>
                    <a href="<?= route('admin.home'); ?>" class="navigation-anchor">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?= route('admin.blog'); ?>" class="navigation-anchor">
                        <p>Blog</p>
                    </a>
                </li>
                <li>
                    <a href="<?= route('web.home'); ?>" class="navigation-anchor">
                        <p>Ir al sitio</p>
                    </a>
                </li>
            </ul>
        </nav>

        <a href="" class="navigation-anchor">Cerrar sesión</a>

    </header>

    <main>
        @yield('content')

        @if(\Session::has('status.message'))
            <div class="notification">
                <p class="paragraph">{{ \Session::get('status.message') }}</p>
            </div>
        @endif

    </main>

    <footer class="container">

        <div class="footer-credits">
            <a href="<?= route('admin.home'); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                    <path fill="#DEE6FE" d="M42 24c0 9.941-8.059 18-18 18S6 33.941 6 24 14.059 6 24 6s18 8.059 18 18Z" />
                    <path fill="#2741E8" fill-rule="evenodd" d="M29.775 14.521a5.556 5.556 0 0 0-4.727-.094l-9.09 4.059c-.609.271-1 .872-1 1.534v1.07c0 .639.363 1.222.938 1.506l7.348 3.64a1.704 1.704 0 0 0 1.512 0l7.412-3.671C33.47 21.92 35 22.86 35 24.305v1.372c0 .737-.42 1.411-1.084 1.74l-9.042 4.478a1.97 1.97 0 0 1-1.748 0l-7.044-3.488a.777.777 0 0 0-1.124.69c0 .294.167.561.43.692l7.865 3.895a1.704 1.704 0 0 0 1.503.004l6.172-3.01a.982.982 0 0 1 1.31.444.97.97 0 0 1-.447 1.302l-6.925 3.377a1.97 1.97 0 0 1-1.736-.005l-9.045-4.48A1.944 1.944 0 0 1 13 29.576V27.85c0-1.445 1.53-2.385 2.832-1.74l7.412 3.67a1.704 1.704 0 0 0 1.512 0l7.944-3.934a.613.613 0 1 0-.552-1.098l-7.274 3.602a1.97 1.97 0 0 1-1.748 0l-9.042-4.477A1.944 1.944 0 0 1 13 22.132v-3.2c0-.765.452-1.46 1.155-1.774l10.09-4.505a7.525 7.525 0 0 1 6.404.127c3.662 1.814 3.585 7.03-.128 8.737l-5.679 2.61a1.97 1.97 0 0 1-1.71-.031l-5.369-2.71a.97.97 0 0 1-.43-1.308.982.982 0 0 1 1.317-.427l4.637 2.341a1.704 1.704 0 0 0 1.479.027l4.933-2.267c2.223-1.022 2.269-4.145.076-5.23Z" clip-rule="evenodd" />
                </svg>
            </a>
            <p class="footer-copyright">© 2023 Concepto.</p>
            <p class="footer-copyright">Made with &hearts; by Ana Laura Almirón & Brisa Marca.</p>
        </div>

        <div class="footer-socials">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewbox="0 0 48 48" class="socials-svg">
                    <path stroke="#2741E8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M26.061 17.974c0-2.003 1.047-2.003 2.093-2.003h1.255c.21.003.418-.035.612-.11.195-.076.371-.188.52-.33.148-.142.265-.31.343-.496.08-.186.119-.385.116-.586v-1.883c0-.201-.042-.4-.123-.587a1.52 1.52 0 0 0-.35-.496 1.598 1.598 0 0 0-.523-.329 1.655 1.655 0 0 0-.616-.11l-2.971-.04a6.224 6.224 0 0 0-2.527.434c-.8.318-1.518.798-2.105 1.407a5.677 5.677 0 0 0-1.295 2.122 5.494 5.494 0 0 0-.246 2.446v2.904H18.59c-.421 0-.826.16-1.124.446A1.49 1.49 0 0 0 17 21.839v1.883c0 .403.168.79.466 1.076.298.286.703.446 1.124.446h1.654v10.755c0 .265.11.52.306.708.196.188.462.293.74.293h3.788c.266-.015.516-.128.7-.314A.979.979 0 0 0 26.06 36V25.244h1.842c.422 0 .826-.16 1.124-.446a1.49 1.49 0 0 0 .466-1.076v-1.883c0-.403-.167-.79-.466-1.076a1.627 1.627 0 0 0-1.124-.446H26.06v-2.343Z" />
                </svg>
            </a>

            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewbox=" 0 0 48 48" class="socials-svg">
                    <path fill="#2741E8" d="M24 29.78v.9-.9Zm5.777-5.778h.9-.9ZM24 18.224v-.9.9Zm-5.778 5.778h-.9.9Zm0-13.002v-.9.9Zm13.056 4.468a.9.9 0 0 0 1.332 1.21l-1.332-1.21Zm1.348 1.194a.9.9 0 1 0-1.332-1.211l1.332 1.21ZM24 30.68c1.77 0 3.47-.704 4.721-1.956L27.45 27.45a4.878 4.878 0 0 1-3.45 1.429v1.8Zm4.721-1.956a6.678 6.678 0 0 0 1.956-4.722h-1.8a4.878 4.878 0 0 1-1.428 3.449l1.272 1.273Zm1.956-4.722c0-1.771-.703-3.47-1.956-4.722l-1.272 1.273a4.878 4.878 0 0 1 1.428 3.449h1.8Zm-1.956-4.722A6.678 6.678 0 0 0 24 17.324v1.8c1.293 0 2.534.514 3.449 1.429l1.272-1.273ZM24 17.324c-1.771 0-3.47.704-4.722 1.956l1.272 1.273A4.878 4.878 0 0 1 24 19.124v-1.8Zm-4.722 1.956a6.677 6.677 0 0 0-1.956 4.722h1.8c0-1.294.514-2.534 1.428-3.45l-1.272-1.272Zm-1.956 4.722c0 1.77.703 3.47 1.956 4.722l1.272-1.273a4.878 4.878 0 0 1-1.428-3.45h-1.8Zm1.956 4.722A6.678 6.678 0 0 0 24 30.68v-1.8a4.878 4.878 0 0 1-3.45-1.429l-1.272 1.273ZM11.9 29.778V18.222h-1.8v11.556h1.8Zm0-11.556c0-1.677.666-3.285 1.852-4.47l-1.273-1.273a8.123 8.123 0 0 0-2.379 5.743h1.8Zm1.852-4.47a6.323 6.323 0 0 1 4.47-1.852v-1.8c-2.154 0-4.22.856-5.743 2.379l1.273 1.273Zm4.47-1.852h11.556v-1.8H18.222v1.8Zm11.556 0c1.677 0 3.285.666 4.47 1.852l1.273-1.273a8.123 8.123 0 0 0-5.743-2.379v1.8Zm4.47 1.852a6.323 6.323 0 0 1 1.852 4.47h1.8c0-2.154-.856-4.22-2.379-5.743l-1.273 1.273Zm1.852 4.47v11.556h1.8V18.222h-1.8Zm0 11.556a6.323 6.323 0 0 1-1.852 4.47l1.273 1.273a8.123 8.123 0 0 0 2.379-5.743h-1.8Zm-1.852 4.47a6.323 6.323 0 0 1-4.47 1.852v1.8c2.154 0 4.22-.856 5.743-2.379l-1.273-1.273Zm-4.47 1.852H18.222v1.8h11.556v-1.8Zm-11.556 0a6.323 6.323 0 0 1-4.47-1.852l-1.273 1.273a8.123 8.123 0 0 0 5.743 2.379v-1.8Zm-4.47-1.852a6.323 6.323 0 0 1-1.852-4.47h-1.8c0 2.154.856 4.22 2.379 5.743l1.273-1.273Zm18.858-17.57.016-.016-1.332-1.211-.016.017 1.332 1.21Z" />
                </svg>
            </a>

            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewbox=" 0 0 48 48" class="socials-svg">
                    <path stroke="#2741E8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19.356 37s-1.045-4.16 1.044-6.24c0 0-4.178 0-7.311-3.12s-2.089-9.36 0-11.44c-1.045-3.12 1.044-5.2 1.044-5.2s3.134 0 5.223 2.08c2.088-1.04 7.31-1.04 9.4 0C30.845 11 33.978 11 33.978 11s2.089 2.08 1.044 5.2c2.09 2.08 3.134 8.32 0 11.44-3.133 3.12-7.31 3.12-7.31 3.12C29.8 32.84 28.755 37 28.755 37M18.31 35.96C15.178 37 12.044 34.92 11 33.88" />
                </svg>
            </a>
        </div>

    </footer>

    <!--Script para el menú hamburguesa-->
    <script src="<?= url('js/menu.js'); ?>"></script>

</body>

</html>