<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($cliente_id, $tecnico_id, $servicio_id, $sala_id) {
            DB::table('cita')->insert([
                'unique_id' => Str::uuid(),
                'fecha_hora' => now(),
                'fecha_hora_end' => now()->addHour(),
                'estado' => 'activo',
                // 'created_at' => now(),
                // 'updated_at' => now(),
                'cliente_id' => $cliente_id,
                'tecnico_id' => $tecnico_id,
                'servicio_id' => $servicio_id,
                'sala_id' => $sala_id,
            ]);
        }, [
            2,
            3,
            4,
        ], [
            8,
            9,
            10,
        ], [
            3,
            4,
            5,
        ], [
            1,
            2,
            3,
        ]);
    }
}
