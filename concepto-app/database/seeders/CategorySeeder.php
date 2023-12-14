<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                'category_id' => 1,
                'name' => 'UX/UI',
                'description' => 'El diseño UX/UI es la disciplina de crear productos digitales que sean simples, intuitivos, eficientes y visualmente atractivos para el usuario final.Ambos elementos son cruciales para el desarrollo de un producto y trabajan en estrecha colaboración. Aunque ambas están altamente relacionadas, no son lo mismo y trabajan en distintos aspectos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Frontend',
                'description' => 'El frontend hace referencia a la interfaz gráfica de usuario (GUI) con la que los usuarios pueden interactuar de forma directa, como los menús de navegación, los elementos de diseño, los botones, las imágenes y los gráficos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Backend',
                'description' => 'El backend es un término que utilizamos para referirnos a la arquitectura interna de un sitio web. Esta área lógica, que no es visible a los ojos del usuario y no incluye elementos de tipo gráfico, permite que todos los elementos de una web desarrollen la función correcta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'Data',
                'description' => 'Analizan y transforman los datos que manejan las empresas en información útil y comprensible para una organización.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}