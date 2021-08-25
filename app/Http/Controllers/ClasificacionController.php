<?php

namespace App\Http\Controllers;

use App\Models\ClasificacionPersona;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{   
    /**
     * @author Jeisson Sanchez
     * Metodo que trae todas las clasificaciones
     */
    public function index(){
        $clasificacion = ClasificacionPersona::where('estado', 1)->get();
        return $clasificacion;
    }
}
