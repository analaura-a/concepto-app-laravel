<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'email' => 'brisa@gmail.com',
                'password' => Hash::make('brisa'),
                'service_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'email' => 'ana@gmail.com',
                'password' => Hash::make('analaura'),
                'service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'email' => 'gallino@gmail.com',
                'password' => Hash::make('santiago'),
                'service_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
