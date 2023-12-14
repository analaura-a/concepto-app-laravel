<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'service_id' => 1,
                'name' => 'Básico',
                'description' => 'Para los que solo queiren acceder a nuestro inmenso catálogo.',
                'price' => 3000,

            ],
            [
                'service_id' => 2,
                'name' => 'Empresarial',
                'description' => 'Para las empresas que quieren llevar a sus talentos al siguiente nivel.',
                'price' => 15000,

            ],
            [
                'service_id' => 3,
                'name' => 'Premium',
                'description' => 'Para los que buscan vivir la experiencia completa de concepto',
                'price' => 10000,

            ],
            [
                'service_id' => 4,
                'name' => 'Sin servicio',
                'description' => 'No contrato ningun servicio',
                'price' => 0,

            ]
        ]);
    }
}
