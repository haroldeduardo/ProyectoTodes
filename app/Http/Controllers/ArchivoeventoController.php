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
        ["nombre"=>"required"]);//required es necesario
        if(!$validar_archivoevento->fails())//si al validar no hay falla
          {

            $img="";
           $imagen=$request->hasfile('img');
           if($imagen){
            $img=$request->file('img')->store('imagenes','public'); 
                      }
            
                      $archivo= new Archivoeventomodels();
                      $archivo->ruta = $request->ruta;
                      $archivo->id_publicacion = $request->id_publicacion;
          }
    }

// subiendo con move
    public function codeaguardar(Request $request){

        dd($request);
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

    public function archivopublicacion (){

        $archivo_por_publicacion =archivoeventomodels::select('.nombre AS nombre_categoria','p.nombre AS nombre_publicacion','p.estado AS estado')
        ->join('detallecategoria AS dc','dc.id_categoria','=','categoria.id')
        ->join('publicacionevento AS p','p.id','=','dc.id_publicacion')
        ->where('p.estado','=','inactivo')
         ->get();
        return $publicacion_por_categoria;
    }

    public function archivopublicaciones (){

        $archivo_por_publicacion =archivoeventomodels::select('archivoevento.id_publicacion AS nombre_publicacion')
        ->join('publicacionevento AS p','p.id','=','archivoevento.id_publicacion')
        //->join('publicacionevento AS p','p.id','=','dc.id_publicacion')
        ->get();
        return $archivo_por_publicacion;
        }
}
