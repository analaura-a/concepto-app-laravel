<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('blogposts')->insert([
            [
                'id' => 1,
                'author_id' => 1,
                'category' => 'Primer trabajo',
                'title' => '¿Cómo conseguir tu primer trabajo en IT?',
                'summary' => 'Son muchas las personas que están queriendo conseguir su primer empleo IT. Y es que la industria de la tecnología está requiriendo, cada vez más, profesionales que estén listos para trabajar.',
                'cover' => 'https://www.alkemy.org/wp-content/uploads/2022/04/como-conseguir-el-primer-empleo-en-it.jpg',
                'content' => 'Según El Economista, “las contrataciones para puestos en tecnología se estancaron durante 2021 debido a la falta de talento especializado en nuevas herramientas digitales. Es decir, se reportó mucho empleo, pero pocos perfiles con las competencias necesarias para ocuparlos”.
                Pero, ¿es fácil conseguir el primer empleo en el área IT? La respuesta es no, no lo es. Mientras que existe una demanda de programadores muy alta, por otro lado, los desarrolladores trainees encuentran numerosos obstáculos a la hora de encontrar su primer empleo en la industria.                
                Las empresas están buscando perfiles con algo de experiencia para evitar procesos de inducción costosos, en términos de tiempos y riesgos, y frustrantes, cuando la persona rápidamente cambia de trabajo.                
                Y es aquí donde se nos viene una pregunta interesante: ¿Qué fue primero el huevo o la gallina? Porque, si bien es cierto que es deseable que los postulantes tengan experiencia previa en el área, ¿cómo la van a tener si no han podido acceder a su primer empleo IT?                
                Existen empresas que tienen programas de aceleración para desarrolladores que los ayudan a tener un perfil Job-Ready en la industria de la tecnología.                
                Si quieres saber cómo conseguir tu primer empleo IT, entonces este artículo es para ti.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'author_id' => 3,
                'category' => 'Skills',
                'title' => 'Qué talentos buscan las empresas (y dónde adquirirlos)',
                'summary' => 'Nuestra amplia oferta de formación se encuentra orientada al desarrollo profesional en tecnología y diseño, buscando potenciar las habilidades técnicas de personas de todas partes del mundo. Conocé los detalles.',
                'cover' => 'https://coxblue.com/wp-content/uploads/2019/02/technology-company.jpg',
                'content' => 'No hay dudas que el sector IT se transformó en uno de los más pujantes y dinámicos del mercado. El desarrollo de software y aplicaciones mobile, entre otras aptitudes, son cada vez más requeridas por las empresas, que brindan variados beneficios a la hora de captar talentos. El sector de la educación no es indistinto a esto: hay una creciente oferta educativa -que evoluciona minuto a minuto - que responde a esto. 
                En concepto, buscamos ofrecer capacitaciones a través de cursos cortos y tutoriales que permitan desarrollar las nuevas capacidades y habilidades digitales más demandadas por el mercado actual. 
                Entre las especialidades que más demanda tienen, están Data Science,  DevOps, Programación: Java / .NET / Python / Node, Diseño de Experiencia de Usuarios, Product Owner / Scrum Master y Testing QA, entre otras. Más de 10.000 personas estudian en concepto cada año. Muchas de ellas siguen cursando debido a la alta calidad de los profesores, grandes referentes de la industria, y a los contenidos dictados por cada uno de ellos.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
