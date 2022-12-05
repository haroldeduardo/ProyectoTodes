<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentario=Comentarios::all();
        return $comentario;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar_comentario=Validator::make($request->all(),
        ["Clasificacion"=>"required"]);//required es necesario
        if(!$validar_comentario->fails())//si al validar no hay falla
          {
            $comentario = new Comentarios();
            $comentario->contenido = $request->contenido;
            $comentario->clasificacion = $request->clasificacion;
            $comentario->id_usuario = $request->id_usuario;
            $comentario->publicacion = $request->id_publicacion;
            $comentario->fecha_comentario = Carbon::now();
            $comentario->save();
            return response()->json(['mensaje'=>"QUEDO GUARDADO EL COMENTARIO"]);
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
       $comentarioshow=Comentarios::Where('id',$id)->get();
       return $comentarioshow;
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
        $validar_comentario=Validator::make
        ($request->all(),["fecha_comentario","clasificacion"=>"required"]);
        if(!$validar_comentario->fails())
        {
            $comentariosupdate=Comentarios::find($id);
                if(isset($comentariosupdate))
                {
                    $comentariosupdate->contenido= $request->contenido;
                    $comentariosupdate->clasificacion = $request->clasificacion;
                    $comentariosupdate->fecha_comentario = $request->fecha_comentario;
                    $comentariosupdate->save();
                    
                    return response()->json(['mensaje'=>"QUEDO ACTUALIZADA ESE COMENTARIO"]);
                }
                 else{
                    return response()->json(['mensaje'=>" ESA COMENTARIO NO SE ENCONTRO"]);
                 }
        }
        else
        {
            return response()->json(['mensaje'=>" LA VALIDACION DE ESE COMENTARIO ES INCORRECTA"]);
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
        $comentariodestroy=Comentarios::find($id);
        if(isset($comentariodestroy))
        {
          $comentariodestroy->delete();
          return response()->json(['mensaje'=>"EL COMENTARIO SE ELIMINO CORRECTAMENTE"]);
        }
        else{
            return response()->json(['mensaje'=>"EL ID DEL COMENTARIO NO FUE ENCONTRADO"]);
        }
        return response()->json([
            'mensaje'=>"ok",
            "id"=>$id,
            'Clasificacion'=>$comentariodestroy
             ]);
    }
}
