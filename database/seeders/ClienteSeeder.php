<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'documento' => 'Carnet de identidad',
                'registro' => '321456987',
                'nombre' => 'Jonny Fernandez',
                'telefono' => 78945612
            ],
            [
                'documento' => 'Pasaporte',
                'registro' => '258963147',
                'nombre' => 'Fernando Camacho',
                'telefono' => 74185296
            ],
            [
                'documento' => 'Carnet de identidad',
                'registro' => '654123789',
                'nombre' => 'Angelica Sossa',
                'telefono' => 79632145
            ],
        ]);
    }
}
