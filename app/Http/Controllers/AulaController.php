<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function index()
    {
        return aula::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return aula::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return aula::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        if (aula::where('id', $id)->exist()) {
            $aula=aula::find($id);
            $aula->numero_aula = $request->numero_aula;

            $aula->save();
            return response()->json([
                "message" => "record updated successfully"
            ],200);

        }else{
            return response()->json([
                "message" => "Article not found"
            ], 404);
        }
    }*/

    public function update ($id, Request $request){
        $aula=aula::find($id);
        $aula->numero_aula = $request->numero_aula;
        $aula->save();

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
        
            $aula=aula::find($id);
            $aula->delete();

            return response()->json([
                "message" => "record deleted"
            ],202);
    }
}
