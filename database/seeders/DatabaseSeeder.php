<?php

namespace Database\Seeders;

use DetalleComprobante;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            // DepartamentoSeeder::class,
            // ProvinciaSeeder::class,
            DistritoSeeder::class,
            CategoriaSeeder::class,
            ServicioSeeder::class,
            TipoPersonaSeeder::class,
            PersonaSeeder::class,
            SalaSeeder::class,
            // DireccionSeeder::class,
            // TelefonoSeeder::class,
            ComprobanteSeeder::class,
            DetalleComprobanteSeeder::class,
            //VehiculoSeeder::class,
            CitaSeeder::class,
            // TipoDePrendaSeeder::class,
            // PrendaSeeder::class,
        ]);
    }
}
