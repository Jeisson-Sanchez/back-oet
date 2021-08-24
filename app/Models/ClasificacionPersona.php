<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasificacionPersona extends Model
{
    use HasFactory;

    public $table          = 'clasificacion_persona';   // Nombre de la tabla
    protected $primaryKey  = 'id';              // Nombre de la llave primaria

    /* columnas que se tiene en la tabla de la base de datos */
    protected $fillable = [
        'clasificacion',
        'descripcion',
        'estado',
    ];
}
