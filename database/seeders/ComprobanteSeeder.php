<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ComprobanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($numero, $serie, $tipo, $persona_id){
            DB::table('comprobante')->insert([
                'unique_id' => Str::uuid(),
                'numero' => $numero,
                'serie' => $serie,
                'tipo' => $tipo,
                'fecha' => now(),
                'hora' => now(),
                'estado' => 'activo',
                // 'created_at' => now(),
                // 'updated_at' => now(),
                'persona_id' => $persona_id,
            ]);
        },[
            '104471',
            '104471',
            '104471',
            '104473',
            '104474',
        ],[
            '1A1',
            '2B2',
            '3C3',
            '4D4',
            '5E5',
        ],[
            'factura',
            'factura',
            'factura',
            'boleta',
            'boleta',
        ],[
            '1',
            '2',
            '3',
            '4',
            '5',
        ]);
    }
}
