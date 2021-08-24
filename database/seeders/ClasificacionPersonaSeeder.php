<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClasificacionPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClasificacionPersona::create(['clasificacion' => 'Propietario']);        
        ClasificacionPersona::create(['clasificacion' => 'Conductor']);
    }
}
