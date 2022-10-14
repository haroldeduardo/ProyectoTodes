<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archivoeventomodels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ArchivoeventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivo=Archivoeventomodels::all();
        return $archivo;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar_archivoevento=Validator::make($request->all(),
        ["ruta"=>"required"]);//required es necesario
        if(!$validar_archivoevento->fails())//si al validar no hay falla
          {
            $archivoevento= new Archivoeventomodels();
            $archivoevento->ruta = $request->ruta;
            $archivoevento->save();
            return response()->json(['mensaje'=>"QUEDO GUARDADO EL ARCHIVO EVENTO"]);
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
        $arshicoshow=Archivoeventomodels::Where('id',$id)->get();
        return $arshicoshow;
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
        $validar_archivoevento=Validator::make
        ($request->all(),["ruta"=>"required"]);
        if(!$validar_archivoevento->fails())
        {
            $archivoevento = Archivoeventomodels::find($id);
                if(isset($archivoevento))
                {
                    $archivoevento->ruta= $request->ruta;
                    $archivoevento->save();
                    return response()->json(['mensaje'=>"QUEDO ACTUALIZADO ARCHIVO EVENTO"]);
                }
                 else{
                    return response()->json(['mensaje'=>" ESE ARCHIVO EVENTO NO SE ENCONTRO"]);
                 }
        }
        else
        {
            return response()->json(['mensaje'=>" LA VALIDACION DE ESE ARCHIVO EVENTO ES INCORRECTO"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $archivoeventodestroy=Archivoeventomodels::find($id);
        if(isset($archivoeventodestroy))
        {
          $archivoeventodestroy->delete();
          return response()->json(['mensaje'=>"EL ARCHIVO EVENTO SE ELIMINO CORRECTAMENTE"]);
        }
        else{
            return response()->json(['mensaje'=>"EL ID DEL ARCHIVO EVENTO NO FUE ENCONTRADO"]);
        }
        return response()->json([
            'mensaje'=>"ok",
            "id"=>$id,
            'ruta'=>$archivoeventodestroy
             ]);
    }
}
