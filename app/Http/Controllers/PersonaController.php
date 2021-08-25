<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\Validator;


class PersonaController extends Controller
{
    /**
     * @author Jeisson Sanchez
     * Metodo que muestra todos los usuarios
     */
    public function index()
    {
        $personas = Persona::with('clasificacion')->where('estado', 1)->get();
        return $personas;
    }

    /**
     * @author Jeisson Sanchez
     * @param  request n_cedula,primer_nombre,segundo_nombre,apellidos,direccion,telefono,ciudad,id_clasificacion
     * Metodo que crea una persona
     */
    public function store(Request $request)
    {
        
        //validacion de campos
        $validator = validator::make($request->all(), [
            'n_cedula' => 'required',
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required',
            'id_clasificacion' => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        // dd($request);
        try {
            $newPersona = Persona::create([
                'n_cedula' => $request->n_cedula,
                'primer_nombre' => $request->primer_nombre,
                'segundo_nombre' => $request->segundo_nombre,
                'apellidos' => $request->apellidos,
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
                'ciudad' => $request->ciudad,
                'id_clasificacion' => $request->id_clasificacion
            ]);

            return response()->json(["Persona registrada"], 200);

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
     * @param id id de la clasificacion
     * Filtro que busca a las personas por clasificacion
     */
    public function filtroClasificacion($id){
        switch ($id) {
            case 1:
                $personas = Persona::where('estado',1)->where('id_clasificacion',1)->get();
                return $personas;
                break;
            case 2:
                $personas = Persona::where('estado',1)->where('id_clasificacion',2)->get();
                return $personas;
                break;
            case 3:
                $personas = Persona::where('estado',1)->where('id_clasificacion',3)->get();
                return $personas;
                break;
            default:
                return response()->json(["No encontrado"], 404);
                break;
        }
    }
}
