<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('vehiculo','App\Http\Controllers\VehiculoController');
Route::apiResource('persona','App\Http\Controllers\PersonaController');

Route::get('filtroClasificacion/{id}','App\Http\Controllers\PersonaController@filtroClasificacion');
Route::get('tipoVehiculo','App\Http\Controllers\VehiculoController@tipoVehiculo');
Route::get('clasificacion','App\Http\Controllers\ClasificacionController@index');