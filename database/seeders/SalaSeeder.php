<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($nro_sala, $cliente_id, $tecnico_id){
            DB::table('sala')->insert([
                'unique_id' => Str::uuid(),
                'nro_sala' => $nro_sala,
                'insumos' => 'insumo genérico',
                'cliente_id' => $cliente_id,
                'tecnico_id' => $tecnico_id,
                'estado' => 'activo',
            ]);
        },[
            '101',
            '102',
            '103',
            '104',
            '105',
            '106',
            '107',
            '108',
            '109',
            '110',
            '111',
            '112',
        ],[
            2,
            2,
            2,
            2,
            3,
            3,
            3,
            3,
            4,
            4,
            4,
            4,
        ],[
            8,
            8,
            8,
            9,
            9,
            9,
            10,
            10,
            10,
            11,
            11,
            11,
        ]);
    }
}
