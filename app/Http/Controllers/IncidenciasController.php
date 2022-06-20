<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencias;

class IncidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Incidencias::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Incidencias::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        return Incidencias::find($id);
    }*/

    public function show($correo)
    {
        //return Incidencias::where('correo', $correo)->firstOrFail();  
        //return Incidencias::where('correo', '=', $correo)->get();
        return Incidencias::find($correo);
    }

    /*public function table($correo)
    {
        
        return Incidencias::find($correo);
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $incidencia=Incidencias::find($id);
        $incidencia->titulo = $request->titulo;
        $incidencia->descripcion = $request->descripcion;
        $incidencia->aula = $request->aula;
        $incidencia->fcreacion = $request->fcreacion;
        $incidencia->fmodificacion = $request->fmodificacion;
        $incidencia->fcierre = $request->fcierre;
        $incidencia->estado = $request->estado;
        $incidencia->correo = $request->correo;
        $incidencia->comentarios = $request->comentarios;
        $incidencia->save();

        return response()->json([
            "message" => "record deleted"
        ],202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aula=Incidencias::find($id);
            $aula->delete();

            return response()->json([
                "message" => "record deleted"
            ],202);
    }
}
