<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($direccion, $persona_id, $distrito_id){
            DB::table('direccion')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $direccion,
                'referencia' => 'Referencia',
                'estado' => 'activo',
                // 'created_at' => now(),
                // 'updated_at' => now(),
                'persona_id' => $persona_id,
                'distrito_id' => $distrito_id,
            ]);
        },[
            'Av. Arequipa 111',
            'Av. Arequipa 222',
            'Av. Arequipa 333',
            'Av. Arequipa 444',
            'Av. Arequipa 555',
            'Av. Arequipa 666',
            'Av. Arequipa 777',
            'Av. Arequipa 888',
            'Av. Arequipa 999',
            'Av. Arequipa 101010',
            'Av. Arequipa 111111',
        ],[
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
        ],[
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
        ]);
    }
}
