<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public $table          = 'personas';   // Nombre de la tabla
    protected $primaryKey  = 'id';              // Nombre de la llave primaria

    /* columnas que se tiene en la tabla de la base de datos */
    protected $fillable = [
        'n_cedula',
        'primer_nombre',
        'segundo_nombre',
        'apellidos',
        'direccion',
        'telefono',
        'ciudad',
        'id_clasificacion',
        'estado'
    ];

    /** relacion con la clasificacion de una persona */
    public function clasificacion(){
        return $this->belongsTo(ClasificacionPersona::class, 'id_clasificacion', 'id');
    }
}
