<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitacions')->insert([
            [
                'numero' => 10,
                'categoria' => 'Personal',
                'detalle' => 'Cama, tv, ropero y baño privado',
                'precio' => 180,
                'estado' => 'Disponible'
            ],
            [
                'numero' => 12,
                'categoria' => 'Matrimonial',
                'detalle' => 'Cama, tv cable, ropero y baño privado',
                'precio' => 220,
                'estado' => 'Ocupado'
            ],
            [
                'numero' => 14,
                'categoria' => 'Doble',
                'detalle' => 'Cama, tv cable, ropero, y baño compartido',
                'precio' => 200,
                'estado' => 'Limpieza'
            ],
        ]);
    }
}
