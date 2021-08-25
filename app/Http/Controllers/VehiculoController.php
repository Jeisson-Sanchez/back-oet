<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\TipoVehiculo;
use Illuminate\Support\Facades\Validator;


class VehiculoController extends Controller
{
    /**
     * @author Jeisson Sanchez
     * Metodo que muestra todos los vehiculos activos
     */
    public function index()
    {
        $vehiculos = Vehiculo::with('conductor','propietario','tipoVehiculo')->where('estado', 1)->get();
        return $vehiculos;
    }

    /**
     * @author Jeisson Sanchez
     * @param  request placa,color,marca,id_tipo_vehiculo,id_conductor,id_propietario
     * Metodo para registrar un vehiculo
     */
    public function store(Request $request)
    {   
        //validacion de campos
        $validator = validator::make($request->all(), [
            'placa' => 'required',
            'color' => 'required',
            'marca' => 'required',
            'id_tipo_vehiculo' => 'required',
            'id_conductor' => 'required',
            'id_propietario' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $newVehiculo = Vehiculo::create([
                'placa' => $request->placa,
                'color' => $request->color,
                'marca' => $request->marca,
                'id_tipo_vehiculo' => $request->id_tipo_vehiculo,
                'id_conductor' => $request->id_conductor,
                'id_propietario' => $request->id_propietario
            ]);

            return response()->json(["Vehículo registrado"], 200);

        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @author Jeisson Sanchez
     * Metodo que trae el tipo de vehiculo
     */
    public function tipoVehiculo(){
        $tipo = TipoVehiculo::where('estado', 1)->get();
        return $tipo;
    }  
}
