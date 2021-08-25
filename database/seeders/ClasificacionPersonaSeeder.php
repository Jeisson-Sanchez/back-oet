<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClasificacionPersona;

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
        ClasificacionPersona::create(['clasificacion' => 'Propietario y Conductor']);
    }
}
