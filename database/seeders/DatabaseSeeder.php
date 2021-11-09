<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Paciente::factory(20)->create();
        DB::table('Users')->insert([
            'name'  => 'José Fernando Pérez García',
            'password'  => bcrypt('123'),
            'rol' => 'Administrador',
            'activo' => 'Si',
            'email'     => 'josefernandoperezgarcia98@gmail.com',
        ]);
        DB::table('Users')->insert([
            'name'  => 'Liliana Sofía López Palomino',
            'password'  => bcrypt('123'),
            'rol' => 'Personal',
            'activo' => 'No',
            'email'     => 'lili@gmail.com',
        ]);
    }
}