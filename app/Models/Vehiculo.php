<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    public $table          = 'vehiculos';   // Nombre de la tabla
    protected $primaryKey  = 'id';              // Nombre de la llave primaria

    /* columnas que se tiene en la tabla de la base de datos */
    protected $fillable = [
        'placa',
        'color',
        'marca',
        'id_tipo_vehiculo',
        'id_conductor',
        'id_propietario',
        'estado',
    ];

    /** relacion conductor */
    public function conductor(){
        return $this->belongsTo(Persona::class, 'id_conductor', 'id');
    }

    /** relacion propietario */
    public function propietario(){
        return $this->belongsTo(Persona::class, 'id_propietario', 'id');
    }

    /** relacion vehiculo */
    public function tipoVehiculo(){
        return $this->belongsTo(TipoVehiculo::class, 'id_tipo_vehiculo', 'id');
    }
}
