<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetalleComprobanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($comprobante_id, $servicio_id, $cantidad, $precio){
            DB::table('detalle_comprobante')->insert([
                'unique_id' => Str::uuid(),
                'cantidad' => $cantidad,
                'precio' => 1,
                'subtotal' => $cantidad * $precio,
                'igv' => ($cantidad * $precio) * 0.18,
                'total' => ($cantidad * $precio) + (($cantidad * $precio) * 0.18),
                'estado' => 'activo',
                // 'created_at' => now(),
                // 'updated_at' => now(),
                'comprobante_id' => $comprobante_id,
                'servicio_id' => $servicio_id,
            ]);
        },[
            '1',
            '1',
            '1',
            '1',
            '1',
            '2',
            '2',
            '2',
            '2',
            '2',
            '3',
            '3',
            '3',
            '3',
            '3',
            '4',
            '4',
            '4',
            '4',
            '4',
            '5',
            '5',
            '5',
            '5',
            '5',
        ],[
            '1',
            '2',
            '3',
            '4',
            '5',
            '1',
            '2',
            '3',
            '4',
            '5',
            '1',
            '2',
            '3',
            '4',
            '5',
            '1',
            '2',
            '3',
            '4',
            '5',
            '1',
            '2',
            '3',
            '4',
            '5',
        ],[
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
        ],[
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
            '100',
        ]);
    }
}
