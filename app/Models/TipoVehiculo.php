<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;

    public $table          = 'tipo_vehiculo';   // Nombre de la tabla
    protected $primaryKey  = 'id';              // Nombre de la llave primaria

    /* columnas que se tiene en la tabla de la base de datos */
    protected $fillable = [
        'tipo',
        'descripcion',
        'estado',
    ];
}
