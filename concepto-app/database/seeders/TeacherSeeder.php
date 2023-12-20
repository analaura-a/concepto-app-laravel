<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            [
                'id' => 1,
                'name' => 'Julia Lopez',
                'profession' => 'Product Designer en Mercado Libre',
                'photo' =>'png/teacher-julia.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Ricardo García',
                'profession' => 'Senior Frontend Developer en Globant',
                'photo' =>'png/teacher-ricardo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Eugenia Casabona',
                'profession' => 'Lead UX Researcher en Accenture',
                'photo' =>'png/teacher-eugenia.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Lara Becker',
                'profession' => 'Lead Backend Developer en Mercado Libre',
                'photo' =>'png/teacher-lara.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Sebastian Tunnell',
                'profession' => 'Machine Learning Engineer en Datademia',
                'photo' =>'png/teacher-sebastian.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Alan Lerner',
                'profession' => 'Director de Asesoría en KPMG Argentina',
                'photo' =>'png/teacher-alan.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
