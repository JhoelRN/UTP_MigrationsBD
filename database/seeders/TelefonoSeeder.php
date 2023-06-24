<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($telefono, $persona_id){
            DB::table('telefono')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $telefono,
                'estado' => 'activo',
                // 'created_at' => now(),
                // 'updated_at' => now(),
                'persona_id' => $persona_id,
            ]);
        },[
            '111000111',
            '222000222',
            '333000333',
            '444000444',
            '555000555',
            '666000666',
            '777000777',
            '888000888',
            '999000999',
            '101000101',
            '111000111',
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
