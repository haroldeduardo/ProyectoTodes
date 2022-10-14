<?php

namespace App\Http\Controllers;
use App\Models\Publicacioneventomodels;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Evento_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicacion=Publicacioneventomodels::all();
        return $publicacion;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar_publicacion=Validator::make($request->all(),
        ["nombre"=>"required"]);//required es necesario
        if(!$validar_publicacion->fails())//si al validar no hay falla
          {
            $publicacion= new Publicacioneventomodels();


            $publicacion->nombre = $request->nombre;
            $publicacion->descripcion = $request->descripcion;
            $publicacion-> fecha_y_Hora = $request->fecha_y_Hora;
            $publicacion->lugar = $request->lugar;
            $publicacion->estado = $request->estado;
            $publicacion->urlExterna = $request->urlExterna;
            $publicacion->responsable = $request->responsable;
            $publicacion->fecha_caducidad = $request->fecha_caducidad;
            $publicacion->tipo = $request->tipo;

            $publicacion->save();
            return response()->json(['mensaje'=>"QUEDO GUARDADA LA PUBLICACION"]);
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
        $publicacionshow=Publicacioneventomodels::Where('id',$id)->get();
        return $publicacionshow;
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
        $validar_publicacion=Validator::make
        ($request->all(),["nombre"=>"required"]);
        if(!$validar_publicacion->fails())
        {
            $publicacion = Publicacioneventomodels::find($id);
                if(isset($publicacion))
                {


                    $publicacion->nombre = $request->nombre;
                    $publicacion->descripcion = $request->descripcion;
                    $publicacion-> fecha_y_Hora = $request->fecha_y_Hora;
                    $publicacion->lugar = $request->lugar;
                    $publicacion->estado = $request->estado;
                    $publicacion->urlExterna = $request->urlExterna;
                    $publicacion->responsable = $request->responsable;
                    $publicacion->fecha_caducidad = $request->fecha_caducidad;
                    $publicacion->tipo = $request->tipo;

                    $publicacion->save();



                    return response()->json(['mensaje'=>"PUBLICACIO ACTUALIZADA"]);
                }
                 else{
                    return response()->json(['mensaje'=>" PUBLICACION NO SE ENCONTRO"]);
                 }
        }
        else
        {
            return response()->json(['mensaje'=>" LA VALIDACION DE LA PUBLICACION ES INCORRECTA"]);
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
        $publicaciondestroy=Publicacioneventomodels::find($id);
        if(isset($publicaciondestroy))
        {
          $publicaciondestroy->delete();
          return response()->json(['mensaje'=>" LA PUBLICACION SE ELIMINO CORRECTAMENTE"]);
        }
        else{
            return response()->json(['mensaje'=>"EL ID DE LA PUBLICACION NO FUE ENCONTRADO"]);
        }
        return response()->json([
            'mensaje'=>"ok",
            "id"=>$id,
            'nombre'=>$publicaciondestroy
             ]);
    }


    //CONSULTA EN DONDE  SE VE LA PUBLICACIONES y eventos mayors  a la fecha

    public function  fechaeventos(){


        $publicacion = Publicacioneventomodels::whereDate('fecha_y_Hora','>','1972-06-02')->get();
        return $publicacion;
    }


    // ordenar ascedntemente   los nombres de las publicaciones
    public function  ordenar(){


        $publicacion = Publicacioneventomodels::orderBy('nombre','asc')->get();
        return $publicacion;
    }
    public function Publicaciones_categoria()
    {
     //   $publicacion = Publicacioneventomodels::
    }
}
