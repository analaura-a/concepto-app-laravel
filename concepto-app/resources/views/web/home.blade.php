@extends('layouts.main')

@section('title', 'Concepto — Potenciá tus habilidades digitales')


@section('content')

<section class="hero-section container mb-200">

    <div class="hero-section-content">
        <div class="hero-section-subtitle mb-16">
            <span>e-learning</span>
            <p>Servicio de cursos online</p>
        </div>
        <h1 class="hero-section-title mb-24">Potenciá tus habilidades digitales con <span
                class="primary-color-text">contenido especializado</span></h1>

        <p class="paragraph hero-section-description mb-32">Avanzá en tu camino IT con contenido corto y
            conciso,
            hecho especialmente para que puedas profundizar
            tus conocimientos y destacar en el mercado laboral actual.</p>

        <a href="<?= route('web.home'); ?>" class="main-cta hero-section-cta">
            <p>Explorar cursos</p>

            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
                <path fill="#657EFF" class="svg-hover"
                    d="M2 10a8 8 0 0 1 8-8h28a8 8 0 0 1 8 8v28a8 8 0 0 1-8 8H10a8 8 0 0 1-8-8V10Z" />
                <path fill="#fff"
                    d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z" />
            </svg>

        </a>

        <dl class="hero-section-data">
            <div>
                <dt>+435</dt>
                <dd>Tutoriales</dd>
            </div>

            <div>
                <dt>+4673</dt>
                <dd>Estudiantes</dd>
            </div>

            <div>
                <dt>+500</dt>
                <dd>Expertos</dd>
            </div>

        </dl>
    </div>

    <div>
        <img src="<?= url('assets/png/hero-section.png'); ?>"
            alt="Estudiante sonriente sosteniendo una notebook, a su alrededor se leen los cursos Buenas prácticas al crear un CRUD utilizando Laravel, Cómo conseguir tu primer trabajo freelance como UX/UI, Cómo construir sistemas de diseño escalables con React">
    </div>

</section>

<section class="container about-concepto mb-200">

    <div class="about-concepto-img">
        <img src="<?= url('assets/png/about-us.png'); ?>" alt="Notebook con el logo de Concepto">
    </div>

    <div class="about-concepto-content">
        <p class="subtitle subtitle-left-line mb-12">¿Qué vas a encontrar en concepto?</p>
        <h2 class="h1 mb-16">Conocimientos específicos para sumar a tu perfil profesional y dar el próximo paso
            en tu
            carrera</h2>

        <p class="paragraph mb-8">
            ¿Terminaste hace poco algún curso, bootcamp o carrera del mundo IT? Seguramente sientas que lo
            aprendido no es suficiente.
        </p>
        <p class="paragraph mb-64">En concepto creamos una plataforma en la que, a través de <span
                class="bold">contenido en
                formato de video</span>, tanto principiantes como no tan principiantes puedan avanzar en su
            carrera digital
            y desarrollarse profesionalmente.</p>

        <ul class="about-concepto-features">

            <li>
                <div class="icon-container mb-16">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48" fill="none" class="svg-medium">
                        <path fill="#2741E8" fill-rule="evenodd"
                            d="M13.618 10.706c-2.09-.175-3.808 1.423-3.808 3.507V30.32c0 1.704 1.352 3.273 3.065 3.49l.382.052.003.001c2.789.373 7.155 1.806 9.623 3.156l.027.014.04.02a2.22 2.22 0 0 0 1.042.248c.336 0 .72-.07 1.055-.26 2.467-1.36 6.837-2.804 9.635-3.177l.435-.053h.003c1.716-.215 3.071-1.785 3.071-3.49V14.226c0-2.094-1.72-3.663-3.784-3.51h-.046a.85.85 0 0 0-.074.002c-2.936.252-7.32 1.723-9.81 3.289l-.009.006-.216.14a.56.56 0 0 1-.252.049.543.543 0 0 1-.254-.051l-.011-.007-.327-.196c-2.49-1.55-6.855-3.005-9.79-3.243Zm-2.094 3.507c0-1.088.868-1.89 1.951-1.799h.003c2.662.216 6.77 1.585 9.029 2.993l.012.008.33.197c.094.059.193.107.294.147v19.462c-2.699-1.354-6.858-2.683-9.654-3.057h-.002l-.383-.053-.01-.001c-.845-.106-1.57-.936-1.57-1.79V14.213Zm13.333 20.992c2.704-1.353 6.823-2.671 9.604-3.041l.01-.002.437-.052c.845-.107 1.569-.936 1.569-1.79V14.227c0-1.094-.873-1.891-1.965-1.8a.858.858 0 0 1-.072.004h-.042c-2.663.237-6.755 1.612-9.003 3.025l-.236.152c-.097.06-.198.11-.302.152v19.445Z"
                            clip-rule="evenodd" />
                        <path stroke="#2741E8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M18.333 19.319h-3m4 4h-4" />
                    </svg>
                </div>
                <h3 class="about-concepto-features-title mb-8">Profundizá en temas concretos</h3>
                <p>Aprendé a fondo aquellos temas que en cursos y bootcamps se ven de manera general o
                    superficial.</p>
            </li>

            <li>
                <div class="icon-container mb-16">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48" fill="none" class="svg-medium">
                        <path fill="#2741E8" fill-rule="evenodd"
                            d="m27.067 10.758.003.002 7.982 5.237a4.974 4.974 0 0 1 2.23 4.709V28a.75.75 0 0 1-1.5 0v-4.223c-.22.21-.463.405-.73.58l-1.795 1.178v6.156c0 1.032-.394 2.059-.994 2.893-.6.834-1.448 1.533-2.425 1.858l-4.261 1.416c-.47.151-1.044.216-1.582.216-.537 0-1.108-.064-1.575-.217l-.003-.001-4.253-1.413c-.977-.326-1.825-1.025-2.426-1.859-.6-.834-.994-1.86-.994-2.893l.013-6.162-1.793-1.17c-3.027-1.976-3.027-6.4 0-8.376l8.024-5.239h.001c.87-.571 1.975-.833 3.04-.832 1.064.002 2.17.268 3.038.846Zm8.73 9.101a.753.753 0 0 0-.014.141v.619a3.467 3.467 0 0 1-1.554 2.485l-7.987 5.24c-.57.375-1.373.587-2.215.587-.842 0-1.644-.212-2.215-.587l-8.028-5.241c-2.12-1.384-2.12-4.48 0-5.864l8.026-5.24.002-.002c.571-.375 1.372-.586 2.214-.585.841.002 1.641.216 2.212.596l.004.003 7.987 5.24a3.469 3.469 0 0 1 1.567 2.608Zm-8.731 9.738 4.691-3.078v5.172c0 .66-.259 1.387-.712 2.017-.453.629-1.058 1.103-1.681 1.311l-4.25 1.412c-.276.088-.681.143-1.119.143-.438 0-.84-.055-1.107-.142h-.001l-4.25-1.413-2.384-7.872.002-.64 4.733 3.09.001.001c.87.571 1.974.833 3.038.833 1.064 0 2.17-.262 3.039-.834Zm-10.813-2.45 2.385 7.872c-.623-.207-1.23-.682-1.682-1.311-.453-.63-.712-1.356-.712-2.016l.01-4.545Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="about-concepto-features-title mb-8">Aprendé de la mano de expertos</h3>
                <p>Mantené tu conocimiento siempre al día con nuestros profesores que son referentes en la
                    industria.</p>
            </li>

            <li>
                <div class="icon-container mb-16">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48" fill="none" class="svg-medium">
                        <path fill="#2741E8" fill-rule="evenodd"
                            d="M20 9.919c-3.407 0-5.987.677-7.697 2.386-1.709 1.71-2.386 4.29-2.386 7.697v8c0 3.407.677 5.988 2.386 7.697 1.71 1.71 4.29 2.386 7.697 2.386h8c3.408 0 5.988-.676 7.697-2.386 1.71-1.71 2.387-4.29 2.387-7.697v-8c0-3.407-.677-5.987-2.387-7.697-1.709-1.71-4.29-2.386-7.697-2.386h-8Zm-8.29 6.812c.308-1.48.862-2.573 1.654-3.365 1.097-1.097 2.768-1.736 5.245-1.903v5.268h-6.9Zm8.4 0V11.42h7.78v5.273l.002.04h-7.783Zm9.28 0h6.902c-.31-1.48-.863-2.573-1.655-3.365-1.097-1.097-2.768-1.736-5.246-1.903v5.23l-.001.038Zm-17.898 1.5a19.72 19.72 0 0 0-.075 1.771v8c0 3.26.657 5.346 1.947 6.636 1.29 1.291 3.377 1.947 6.636 1.947h8c3.26 0 5.346-.656 6.637-1.947 1.29-1.29 1.947-3.376 1.947-6.636v-8c0-.634-.025-1.223-.074-1.77H11.492Z"
                            clip-rule="evenodd" />
                        <path stroke="#2741E8" stroke-linecap="round" stroke-linejoin="round"
                            stroke-miterlimit="10" stroke-width="1.5"
                            d="M21 25.667c0-2.053 1.453-2.893 3.227-1.866L27 25.4c1.773 1.026 1.773 2.706 0 3.733l-2.773 1.6C22.453 31.761 21 30.921 21 28.867v-3.2Z" />
                    </svg>
                </div>
                <h3 class="about-concepto-features-title mb-8">Formato corto y directo al grano</h3>
                <p>Aprendé desde la comodidad de tu hogar y a través de cualquier dispositivo con videos cortos
                    de
                    máximo 5 horas.</p>
            </li>

            <li>
                <div class="icon-container mb-16">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48" fill="none" class="svg-medium">
                        <path fill="#2741E8"
                            d="m31.865 24.804.55.51-.55-.51Zm-8.669-8.669-.51-.55.51.55Zm12.785-1.797.743.098-.743-.098Zm-2.32-2.319.098.744-.097-.744Zm-15.8 15.252.531-.53-.53.53Zm-.473-2.661.673.33-.673-.33Zm3.341 5.528-.53.53.53-.53Zm2.661.474-.33-.673.33.673Zm-3.998-8.94a.75.75 0 0 0-1.06 1.061l1.06-1.06Zm5.875 7.996a.75.75 0 1 0 1.06-1.06l-1.06 1.06Zm-8.042 2.168a.75.75 0 0 0-1.06-1.061l1.06 1.06Zm-4.528 2.406a.75.75 0 1 0 1.06 1.061l-1.06-1.06Zm1.928-5.007a.75.75 0 1 0-1.061-1.06l1.06 1.06Zm-2.795.673a.75.75 0 0 0 1.06 1.06l-1.06-1.06Zm7.996 4.528a.75.75 0 0 0-1.06-1.06l1.06 1.06Zm-2.795.673a.75.75 0 0 0 1.061 1.06l-1.06-1.06Zm11.367-3.37-.53-.53.53.53Zm-3.901 3.9.53.53-.53-.53Zm-2.08-.693.742-.106-.743.106Zm6.327-4.248-.742.107.742-.107ZM16.261 19.602l.53.53-.53-.53Zm-3.9 3.901-.53-.53.53.53Zm.693 2.08.106-.741-.106.742Zm4.248-6.327-.107.742.107-.742Zm3.957 10.352-2.867-2.867-1.06 1.06 2.867 2.868 1.06-1.061Zm10.056-5.314c-2.344 2.527-6.139 4.607-8.255 5.645l.66 1.347c2.132-1.045 6.147-3.226 8.695-5.972l-1.1-1.02Zm-13.254.646c1.038-2.116 3.117-5.91 5.645-8.255l-1.02-1.1c-2.746 2.548-4.927 6.563-5.972 8.694l1.347.66ZM35.237 14.24c-.373 2.852-1.367 7.298-3.922 10.053l1.1 1.02c2.898-3.125 3.932-7.99 4.31-10.878l-1.488-.195Zm-11.53 2.444c2.754-2.555 7.2-3.55 10.052-3.922l-.195-1.488c-2.888.378-7.753 1.412-10.878 4.31l1.02 1.1Zm13.017-2.25a2.789 2.789 0 0 0-3.16-3.16l.195 1.488c.891-.117 1.595.587 1.478 1.478l1.487.195ZM18.392 26.742c-.493-.494-.62-1.211-.33-1.801l-1.348-.66c-.589 1.201-.3 2.604.617 3.521l1.061-1.06Zm1.807 3.928c.917.918 2.32 1.206 3.521.617l-.66-1.347c-.59.29-1.307.162-1.8-.331l-1.061 1.06Zm-1.867-7.936 6.935 6.935 1.06-1.06-6.935-6.935-1.06 1.06Zm-2.168 8.042-3.467 3.467 1.06 1.061 3.468-3.467-1.06-1.061Zm-2.6-2.6-1.734 1.733 1.06 1.06 1.734-1.733-1.06-1.06Zm5.201 5.2-1.734 1.734 1.061 1.06 1.734-1.733-1.06-1.06ZM25.7 17.773a3.202 3.202 0 0 0 0 4.528l1.06-1.06a1.702 1.702 0 0 1 0-2.407l-1.06-1.061Zm0 4.528a3.202 3.202 0 0 0 4.528 0l-1.06-1.06a1.702 1.702 0 0 1-2.407 0L25.7 22.3Zm4.528 0a3.202 3.202 0 0 0 0-4.528l-1.06 1.06a1.702 1.702 0 0 1 0 2.407l1.06 1.061Zm0-4.528a3.202 3.202 0 0 0-4.528 0l1.06 1.06a1.702 1.702 0 0 1 2.407 0l1.061-1.06Zm-2.36 13.436-3.902 3.901 1.06 1.06 3.902-3.9-1.06-1.06Zm-4.71 3.632-.52-3.64-1.485.211.52 3.641 1.486-.212Zm4.497-6.463.347 2.428 1.485-.213-.347-2.427-1.485.212Zm-3.689 6.732a.476.476 0 0 1-.807-.269l-1.485.212c.23 1.612 2.202 2.27 3.353 1.118l-1.06-1.06Zm4.962-2.84c.44-.44.647-1.061.559-1.677l-1.485.213a.476.476 0 0 1-.135.403l1.06 1.061ZM15.73 19.072l-3.9 3.901 1.06 1.06 3.9-3.9-1.06-1.06Zm-2.783 7.254 3.64.52.213-1.484-3.641-.52-.212 1.484Zm6.887-7.466-2.427-.347-.213 1.485 2.428.347.212-1.485Zm-8.005 4.113c-1.151 1.152-.494 3.123 1.118 3.353l.212-1.485a.476.476 0 0 1-.27-.807l-1.06-1.06Zm4.962-2.84a.476.476 0 0 1 .403-.135l.213-1.485a1.976 1.976 0 0 0-1.677.56l1.06 1.06Z" />
                    </svg>
                </div>
                <h3 class="about-concepto-features-title mb-8">Diferenciate del resto</h3>
                <p>Potenciá las habilidades que ya tenés (y obtené las que necesitás) para poder destacar en el
                    mercado laboral actual.</p>
            </li>

        </ul>
    </div>

</section>

<section class="container w-100 categorias mb-201">
    <p class="subtitle subtitle-center-lines text-center">Cómo funciona</p>
    <h2 class="h1 h1-bigger text-center max-600 m-0-auto mt-8 mb-24">Accedé a nuestro catálogo completo, no solo a un curso</h2>
    <p class="paragraph mb-8 text-center max-600 m-0-auto mb-40">
        En lugar de ofrecerte un tutorial en particular, te ofrecemos el paquete completo: nuestro inmenso catálogo de cursos y tutoriales online, ¡para que puedas potenciar tu perfil profesional a tu propio ritmo!  
    </p>
    <a href="<?= route('web.home'); ?>" class="main-cta m-0-auto">
        <p>Explorar planes</p>

        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
            <path fill="#fff"
                d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z" />
        </svg>
    </a>
  
</section>

<section class="container trending mb-200" id="seccionTendencias">
    <p class="subtitle subtitle-left-line mb-12">Últimas tendencias</p>
    <h2 class="h1 h1-bigger mb-56">Descubrí los tutoriales más populares</h2>

    <ul class="container-cards mb-56">
        <li class="course-card">   
            <div class="card-img">
                <img src="<?= url('assets/png/course-design-systems-figma.png'); ?>" alt="Design systems desde 0 en Figma">
            </div>
            <div class="card-content">
                <p class="card-content-category mb-8">UX/UI</p>
                <h3 class="h3 mb-4">Design systems desde 0 en Figma</h3>
                <p class="card-content-paragraph mb-12">Aprendé desde 0 cómo armar un sistema de diseño en Figma, desde por qué necesitarías uno hasta las mejores prácticas utilizadas por equipos de diseño de todo el mundo en la actualidad.</p>
            </div>
        </li>
        <li class="course-card">   
            <div class="card-img">
                <img src="<?= url('assets/png/course-css-bem.png'); ?>" alt="Cómo organizar tu CSS con la metodología BEM">
            </div>
            <div class="card-content">
                <p class="card-content-category mb-8">Frontend</p>
                <h3 class="h3 mb-4">Cómo organizar tu CSS con la metodología BEM</h3>
                <p class="card-content-paragraph mb-12">Aprendé a optimizar tus proyectos frontend con un sistema robusto, escalable, mantenible en el tiempo y con una serie de reglas fáciles de seguir: BEM (Block Element Modifier).</p>
            </div>
        </li>
        <li class="course-card">   
            <div class="card-img">
                <img src="<?= url('assets/png/course-responsive-grid.png'); ?>" alt="Cómo diseñar interfaces web responsive haciendo uso de grillas">
            </div>
            <div class="card-content">
                <p class="card-content-category mb-8">UX/UI</p>
                <h3 class="h3 mb-4">Cómo diseñar interfaces web responsive haciendo uso de grillas</h3>
                <p class="card-content-paragraph mb-12">Aprendé todo sobre el uso de las grillas en el diseño de interfaces web y cómo volver tus diseños responsive.</p>
            </div>
        </li>
        <li class="course-card">   
            <div class="card-img">
                <img src="<?= url('assets/png/course-gsap.png'); ?>" alt="Cómo agregar animaciones a tus webs con GSAP">
            </div>
            <div class="card-content">
                <p class="card-content-category mb-8">Frontend</p>
                <h3 class="h3 mb-4">Cómo agregar animaciones a tus webs con GSAP</h3>
                <p class="card-content-paragraph mb-12">Llevá tu desarrollo front-end al siguiente nivel añadiendo sofisticadas animaciones interactivas a tus proyectos.</p>
            </div>
        </li>
        <li class="course-card">   
            <div class="card-img">
                <img src="<?= url('assets/png/course-accesibility.png'); ?>" alt="Diseñar experiencias digitales siguiendo pautas de accesibilidad">
            </div>
            <div class="card-content">
                <p class="card-content-category mb-8">UX/UI</p>
                <h3 class="h3 mb-4">Diseñar experiencias digitales siguiendo pautas de accesibilidad</h3>
                <p class="card-content-paragraph mb-12">Aprendé a aplicar los principios de la accesibilidad web (Web Content Accessibility Guidelines) en tus diseños y la importancia de considerar la diversidad de necesidades que tus creaciones cubren.</p>
            </div>
        </li>
        <li class="course-card">   
            <div class="card-img">
                <img src="<?= url('assets/png/course-three.png'); ?>" alt="Agregá animaciones 3D a tus webs con Three.js">
            </div>
            <div class="card-content">
                <p class="card-content-category mb-8">Frontend</p>
                <h3 class="h3 mb-4">Agregá animaciones 3D a tus webs con Three.js</h3>
                <p class="card-content-paragraph mb-12">Comienza a crear increíbles experiencias 3D y haz que tu sitio web destaque de la competencia con la librería Three.js</p>
            </div>
        </li>  
    </ul>

    <a href="<?= route('web.home'); ?>" class="main-cta m-0-auto">
        <p>Accedé al catálogo completo</p>

        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
            <path fill="#fff"
                d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z" />
        </svg>
    </a>

</section>

<section class="container w-100 categorias mb-201">
    <p class="subtitle subtitle-center-lines text-center">Nuestro blog</p>
    <h2 class="h1 h1-bigger text-center max-600 m-0-auto mt-8 mb-24">Aprendé con los mejores tips de nuestra comunidad</h2>
    <p class="paragraph mb-8 text-center max-600 m-0-auto mb-40">Desde nuestros tutoriales hasta nuestro blog, en concepto estamos comprometidos con la idea de crear continuamente contenido de calidad para ayudarte a crecer profesionalmente.</p>
    <a href="<?= route('web.blog'); ?>" class="main-cta m-0-auto">
        <p>Ir al blog</p>

        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none">
            <path fill="#fff"
                d="M28.11 15.264a.9.9 0 1 0-1.273 1.272l6.557 6.558H12.9a.9.9 0 1 0 0 1.8h20.493l-6.556 6.556a.9.9 0 0 0 1.272 1.273l8.094-8.093a.9.9 0 0 0 0-1.273l-8.094-8.093Z" />
        </svg>
    </a>
  
</section>

@endsection