<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($nombre, $apellidos, $email, $dni, $tipo_persona_id){
            DB::table('persona')->insert([
                'unique_id' => Str::uuid(),
                'nombres' => $nombre,
                'apellidos' => $apellidos,
                'dni' => $dni,
                'telefono' => rand(100000000, 999999999),
                'direccion' => 'Av. Genérica 123',
                'referencia' => 'Frente a la comisaría',
                'distrito_id' => rand(1, 29),
                'email' => $email,

                'password' => "CPHNXBJs5Ck0JWfgf3/GFBPU/fVyoiwr",
                // No se usa esta implementación debido a la falta de compatibilidad con jasypt de Java
                // 'password' => bcrypt('12345678'),

                'tipo_persona_id' => $tipo_persona_id,
                'estado' => 'activo',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ]);
        },[
            'Admin',
            'ClientePrueba01',
            'ClientePrueba02',
            'ClientePrueba03',
            'TrabajadorPrueba01',
            'TrabajadorPrueba02',
            'TrabajadorPrueba03',
            'TécnicoPrueba01',
            'TécnicoPrueba02',
            'TécnicoPrueba03',
            'TécnicoPrueba04',
        ],[
            'Admin Admin',
            'Martinez Martinez',
            'Perez Perez',
            'Gonzales Gonzales',
            'Solis Solis',
            'Garcia Garcia',
            'Lopez Lopez',
            'Quispe Quispe',
            'Yupanqui Yupanqui',
            'Pachacuti Pachacuti',
            'Atahualpa Atahualpa',
        ],[
            'admin@admin.com',
            'cli1@gmail.com',
            'cli2@gmail.com',
            'cli3@gmail.com',
            'trab1@gmail.com',
            'trab2@gmail.com',
            'trab3@gmail.com',
            'tec1@gmail.com',
            'tec2@gmail.com',
            'tec3@gmail.com',
            'tec4@gmail.com',
        ],[
            '11111111',
            '22222222',
            '33333333',
            '44444444',
            '55555555',
            '66666666',
            '77777777',
            '88888888',
            '99999999',
            '10101010',
            '11011011',
        ],[
            1,
            2,
            2,
            2,
            3,
            3,
            3,
            5,
            5,
            5,
            5,
        ]);
    }
}
