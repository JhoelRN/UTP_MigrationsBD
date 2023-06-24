<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($placa, $marca, $modelo, $color) {
            DB::table('vehiculo')->insert([
                'unique_id' => Str::uuid(),
                'placa' => $placa,
                'marca' => $marca,
                'modelo' => $modelo,
                'color' => $color,
                // 'persona_id' => $persona_id,
                'estado' => 'activo',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ]);
        },[
            'V5L-649',
            'X2J-345',
            'V7D-353',
            'W6M-123',
            'B4F-753',
            'JLK-386',
        ],[
            'Toyota',
            'Mazda',
            'Nissan',
            'Chevrolet',
            'Kia',
            'Hyundai',
        ],[
            'Corolla',
            'CX-5',
            'March',
            'Cruze',
            'Sportage',
            'Accent',
        ],[
            'Blanco',
            'Rojo',
            'Granate',
            'Azul',
            'Negro',
            'Gris',
        ]);
    }
}
