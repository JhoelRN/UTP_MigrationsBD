<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($categoria){
            DB::table('categoria')->insert([
                // 'unique_id' => Str::uuid(),
                'descripcion' => $categoria,
                // 'estado' => 'activo',

            ]);
        },[
            'Spa',
            'Tratamientos corporales',
            'Relajación y masajes',
        ]);
    }
}
