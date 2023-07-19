<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromocionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promocions')->insert([
            [
                'nombre' => 'Normal',
                'descripcion' => 'Atencion normal',
                'descuento' => 0,
            ],
            [
                'nombre' => 'Dia del Padre',
                'descripcion' => 'Cantina libre desde las 00:00',
                'descuento' => 15,
            ],
            [
                'nombre' => 'Todo Santos',
                'descripcion' => 'Cena o almuerzo especial',
                'descuento' => 20,
            ],
            [
                'nombre' => 'Dia de la Madre',
                'descripcion' => 'Regalo sorpresa + desayuno',
                'descuento' => 25,
            ],
        ]);
    }
}
