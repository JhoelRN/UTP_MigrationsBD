<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($tipo){
            DB::table('tipo_persona')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $tipo,
                'estado' => 'activo',
                // 'campo2' => 'nnn'
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ]);
        },[
            'Administrador',
            'Cliente',
            'Trabajador',
            'Gerente',
            'Técnico',
            'Supervisor',

        ]);
    }
}
