<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('courses')->insert([
            [
                'course_id' => 1,
                'category_id' => 1,
                'teacher_id'=> 1,
                'name' => 'Design systems desde 0 en Figma',
                'cover' => 'https://github.com/analaura-a/pwa-ecommerce/blob/main/assets/png/course-design-systems-figma.png?raw=true',
                'short_description' => 'Aprendé desde 0 cómo armar un sistema de diseño en Figma, desde por qué necesitarías uno hasta las mejores prácticas utilizadas por equipos de diseño de todo el mundo en la actualidad.',
                'description' => 'Aprendé desde 0 cómo armar un sistema de diseño en Figma, desde por qué necesitarías uno hasta las mejores prácticas utilizadas por equipos de diseño de todo el mundo en la actualidad. Desarrollar sistemas de diseño que calcen con tu proyecto ahorra muchísimo los tiempos de iteración y problemas que pueden ocurrir al crear productos digitales. Por todo ello, con este curso de sistemas de diseño en Figma aprenderás a crear los componentes, patrones y herramientas necesarias para agilizar tus procesos y las experiencias digitales que quieres crear.Junto a Julia Lopez, profesora del curso y Product Designer en Mercado Libre, conocerás qué elementos componen un design system, cómo crear la estructura del mismo y qué se necesita establecer en la guía de estilo de tu sistema de diseño.A lo largo de este curso, aprenderás los beneficios de crear un design system para tus proyectos digitales y serás capaz de crear uno acorde a tu usuario y tu producto digital.',
                'price' => 850000,
                'rating' => '4.8',
                'students' => 14638,
                'duration' => 5,
                'level' => 'intermedio',
                'requirements' => 'Se necesitan conocimientos intermedios en Figma, tales como autolayout, grilla, variables, constraints y prototipado.',
                'tags' => 'UX/UI.UI.Figma',
                'learnings' => 'Qué es un Design System y cuándo se necesita uno.Construir componentes que forman parte de un Design System.Plugins de Figma que para agilizar el proceso.Handoff: buenas prácticas al momento de colaborar con developers',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'course_id' => 2,
                'category_id' => 2,
                'teacher_id'=> 2,
                'name' => 'Cómo organizar tu CSS con la metodología BEM',
                'cover' => 'https://github.com/analaura-a/pwa-ecommerce/blob/main/assets/png/course-css-bem.png?raw=true',
                'short_description' => 'Aprendé a optimizar tus proyectos frontend con un sistema robusto, escalable, mantenible en el tiempo y con una serie de reglas fáciles de seguir: BEM (Block Element Modifier).',
                'description' => 'Aprendé a optimizar tus proyectos frontend con un sistema robusto, escalable, mantenible en el tiempo y con una serie de reglas fáciles de seguir: BEM (Block Element Modifier).Cuando haces un proyecto, a nivel front end, pasas mucho tiempo maquetando y manteniendo el código CSS. Es una tarea difícil cuando hay selectores anidados que influyen en varios sitios de la web y pueden romper estilos de otras secciones. No sabes qué puedes editar o borrar. Además, como no está bien estructurado el código, terminas añadiendo !important por todos lados... ¿te suena de algo?. Con este curso, ya no tendrás que sufrir más con ese tipo de problemas. Mejorarás tu metodología de trabajo en el desarrollo web frontend y optimizarás el tiempo que te lleva cuando un cliente pida modificaciones en tus proyectos.Si lo que buscas es poder escribir código que sea lo más transparente y auto-documentado posible (transparencia en el sentido de que es clara y obvia en su intención, y auto-documentado porque no tenemos que perder tiempo escribiendo y leyendo documentación extensa y complementaria), la metodología BEM es para vos.',
                'price' => 450000,
                'rating' => '4.5',
                'students' => 12631,
                'duration' => 3,
                'level' => 'intermedio',
                'requirements' => 'Se necesitan conocimientos intermedios en HTML y CSS, ya que no se verá cómo utilizar esas tecnologías en este curso.',
                'tags' => 'Frontend.CSS.Metodología',
                'learnings' => 'Qué es la nomenclatura BEM y cómo se utiliza.La metodología BEMIT (BEM CSS + ITCSS).Escribir CSS de manera escalable a largo plazo.Código limpio y buenas prácticas al maquetar',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'course_id' => 3,
                'category_id' => 1,
                'teacher_id'=> 1,
                'name' => 'Cómo diseñar interfaces web responsive haciendo uso de grillas',
                'cover' => 'https://github.com/analaura-a/pwa-ecommerce/blob/main/assets/png/course-responsive-grid.png?raw=true',
                'short_description' => 'Aprendé todo sobre el uso de las grillas en el diseño de interfaces web y cómo volver tus diseños responsive.',
                'description' => 'Aprendé todo sobre el uso de las grillas en el diseño de interfaces web y cómo volver tus diseños responsive. Las grillas no solo ayudan cuando se trata de crear un diseño coherente, también son la columna vertebral cuando se trata de diseño responsivo y hacer que tu producto digital brille a través de todos los tamaños de pantalla posibles.Figma es una excelente herramienta para diseñar pantallas de sitios web y aplicaciones, y tiene muchas ventajas sobre otros programas de diseño dedicados a imágenes estáticas. Entre ellas, se encuentra la posibilidad de reutilizar componentes y estilos, de crear prototipos para ver cómo funciona tu diseño antes de desarrollarlo y, por supuesto, la posibilidad de hacer que sea responsive.Este curso en particular tiene como objetivo darte a vos y a tu equipo una idea de cómo deberían verse las pantallas de tu diseño cuando el dispositivo cambia su tamaño. Además, vamos a ir un paso más y ver algo de maquetado básico, para que como diseñador/a UX/UI entiendas realmente la parte técnica que hay detrás del producto que estás construyendo.',
                'price' => 430000,
                'rating' => '4.5',
                'students' => 4539,
                'duration' => 3,
                'level' => 'intermedio',
                'requirements' => 'Se necesitan conocimientos intermedios en Figma, puesto que no se explicará desde 0 cómo utilizar la herramienta (solo las funcionalidades de grilla y autolayout).',
                'tags' => 'UX/UI.UI.Figma',
                'learnings' => 'Cómo diseñar utilizando grillas responsive y adaptables en Figma.Añadir contenido evitando errores comunes de posicionamiento.Aplicación básica de columnas, gutter, margen y filas.Qué son los breakpoints, de dónde vienen y cómo utilizarlos',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'course_id' => 4,
                'category_id' => 2,
                'teacher_id'=> 2,
                'name' => 'Cómo agregar animaciones a tus webs con GSAP',
                'cover' => 'https://blog.skcript.com/svrmedia/heroes/web-animation-with-gsap.png',
                'short_description' => 'Llevá tu desarrollo front-end al siguiente nivel añadiendo sofisticadas animaciones interactivas a tus proyectos.',
                'description' => 'Llevá tu desarrollo front-end al siguiente nivel añadiendo sofisticadas animaciones interactivas a tus proyectos.GSAP (GreenSock Animation Platform) es una colección de herramientas que te permitirán dar rienda suelta a tu creatividad y programar animaciones con líneas de tiempo fluidas. Está diseñado para ofrecer rendimiento, compatibilidad y ser fácil de usar. No es de extrañar que más de 7 millones de sitios web utilicen GSAP para dar una capa extra de profesionalismo y creatividad a sus proyectos.Este curso te enseñará todo lo que necesitas para una base sólida en GSAP. Al finalizar este curso, tendrás todos los conocimientos necesarios para crear impresionantes animaciones con JavaScript.',
                'price' => 450000,
                'rating' => '4.5',
                'students' => 14621,
                'duration' => 5,
                'level' => 'avanzado',
                'requirements' => 'Se necesitan conocimientos avanzados en HTML, CSS y JavaScript, ya que no se verá cómo utilizar esas tecnologías en este curso.',
                'tags' => 'Frontend.GSAP.Animaciones.JavaScript',
                'learnings' => 'Cómo crear sofisticados componentes UI con GSAP.Darle profesionalidad a tus webs con animaciones.Cómo crear líneas de tiempo de animación complejas.Cómo poner en práctica lo aprendido en webs reales',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'course_id' => 5,
                'category_id' => 1,
                'teacher_id'=> 3,
                'name' => 'Diseñar experiencias digitales siguiendo pautas de accesibilidad',
                'cover' => 'https://github.com/analaura-a/pwa-ecommerce/blob/main/assets/png/course-accesibility.png?raw=true',
                'short_description' => 'Aprendé a aplicar los principios de la accesibilidad web (Web Content Accessibility Guidelines) en tus diseños y la importancia de considerar la diversidad de necesidades que tus creaciones cubren.',
                'description' => 'Aprendé a aplicar los principios de la accesibilidad web (Web Content Accessibility Guidelines) en tus diseños y la importancia de considerar la diversidad de necesidades que tus creaciones cubren.Al desarrollar frameworks, estructuras, diseños y aplicaciones, estamos pensando en atender las necesidades específicas de un colectivo. En este curso de accesibilidad para web, comprenderás la importancia de considerar la diversidad de necesidades que tus creaciones cubren y aprenderás a aplicar los principios del diseño web inclusivo en tus proyectos a futuro. Junto a Eugenia Casabona, profesora del curso y Lead UX Researcher en Accenture, aprenderás técnicas de accesibilidad y usabilidad a partir de ejemplos reales de diseño inclusivo. Asimismo, aprenderás a evaluar tus proyectos web usando metodologías y herramientas estandarizadas que te acercarán cada vez más a la inclusión.Este curso se basa en las últimas guidelines WCAG 2.1 y 2.2, por lo que obtendrás la información más reciente. Cada vez que se publiquen nuevas guidelines, este curso también se actualizará. ¡Mantenete al día!',
                'price' => 470000,
                'rating' => '4.3',
                'students' => 11143,
                'duration' => 5,
                'level' => 'inicial',
                'requirements' => 'No se necesitan conocimientos en accesibilidad digital ni usabilidad, se verá todo desde 0.',
                'tags' => 'UX/UI.Accesibilidad',
                'learnings' => 'Cómo diseñar pensando en la accesibilidad.Fundamentos de la accesibilidad: cuándo, cómo y por qué.Mejores prácticas y estrategias para diseñar de manera inclusiva.Ejemplos prácticos del día a día de un diseñador UX profesional',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'course_id' => 6,
                'category_id' => 2,
                'teacher_id'=> 2,
                'name' => 'Agregá animaciones 3D a tus webs con Three.js',
                'cover' => 'https://github.com/analaura-a/pwa-ecommerce/blob/main/assets/png/course-three.png?raw=true',
                'short_description' => 'Aprendé a crear sitios web 3D envolventes y creativos con la librería Three.js.',
                'description' => 'Aprendé a crear sitios web 3D envolventes y creativos con la librería Three.js.¿Has querido aprender a desarrollar en 3D para la web y te has perdido entre tanta información? Ahí es donde entra este curso. Utilizaremos una poderosa librería llamada Three.js, una de las más usadas en el entorno web para poder renderizar 3D en el navegador, cuenta con una documentación genial y con grandiosos ejemplos que puedes explorar.Si eres desarrollador web, tienes conocimientos de programación básica o simplemente quieres aprender a trabajar con 3D en la web, este curso es para vos. Te guiaré paso a paso creando ejercicios simples que nos ayudarán a conocer nuestra librería, y aprenderás a mezclar unas librerías que van genial con three.js y el desarrollo 3D en la web como lo son eventemitter3 y tweens.js.Este curso te enseñará todo lo que necesitas para una base sólida en Three.js. Al finalizar este curso, serás capaz de crear gráficos en 3D impresionantes y experiencias interactivas en la web.',
                'price' => 1020000,
                'rating' => '4.5',
                'students' => 16121,
                'duration' => 5,
                'level' => 'avanzado',
                'requirements' => 'Se necesitan conocimientos avanzados en HTML, CSS y JavaScript, ya que no se verá cómo utilizar esas tecnologías en este curso.',
                'tags' => 'Frontend.ThreeJS.Animaciones.JavaScript',
                'learnings' => 'Fundamentos teóricos de la librería ThreeJS.Cómo instalar ThreeJS e importarlo a tu proyecto.Cómo recorrer la escena con movimientos de la cámara en 3D.Cómo añadir elementos web HTML y CSS a tu escena',
                'created_at' => now(),
                'updated_at' => now(),

            ]
        ]);
    }
}
