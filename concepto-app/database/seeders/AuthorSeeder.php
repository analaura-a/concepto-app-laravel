<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'id' => 1,
                'name' => 'Javier Cañas',
                'profession' => 'Sr. Product Designer',
                'bio' => 'Mi nombre es Javier y soy Diseñador UX/UI especializado en crear e impulsar productos digitales. Actualmente trabajo como Product Designer con múltiples clientes alrededor del mundo. Soy mentor de diseño UX y cofundador de una agencia de diseño.',
                'profile_pic' => 'https://img-b.udemycdn.com/user/200_H/37526024_0001_2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Carlos Adrian Soto Botero',
                'profession' => 'Arquitecto de Soluciones',
                'bio' => 'Cuento con más de 14 años de experiencia en consultoría, arquitectura de soluciones, DevOps, desarrollo e implementación de sistemas de información en proyectos de escala internacional. Soy un apasionado por la tecnologia y la enseñanaza, que me permiten mantener vivo el conocimiento y cada dia me pone nuevos retos.',
                'profile_pic' => 'https://img-b.udemycdn.com/user/200_H/114222728_f2e8_8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Angela Yu',
                'profession' => 'Lead Instructor',
                'bio' => 'Soy Angela, desarrolladora apasionada por la enseñanza. Soy la instructora principal de London App Brewery, el principal bootcamp de programación de Londres. He ayudado a cientos de miles de estudiantes a aprender a programar y a cambiar sus vidas convirtiéndose en desarrolladores.',
                'profile_pic' => 'https://img-b.udemycdn.com/user/200_H/31334738_a13c_3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
