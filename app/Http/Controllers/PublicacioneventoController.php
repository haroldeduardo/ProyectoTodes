<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacioneventomodels;
use Illuminate\Support\Facades\Validator;


class PublicacioneventoController extends Controller
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
            $img="";
            $imagen=$request->hasfile('img');
           if($imagen){
            $img=$request->file('img')->store('imagenes','public'); 
           }
            
            $publicacion= new Publicacioneventomodels();
            $publicacion->nombre = $request->nombre;
            $publicacion->descripcion = $request->descripcion;
            $publicacion-> fecha_y_Hora = $request->fecha_y_Hora;
            $publicacion->lugar = $request->lugar;
            $publicacion->estado = $request->estado;
            $publicacion->urlExterna = $img;
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


    public function publicacionNoticia()
    {
       /* SELECT publicacionevento.nombre,publicacionevento.descripcion,publicacionevento.lugar,
        publicacionevento.responsable,publicacionevento.estado,publicacionevento.tipo,ar.ruta FROM publicacionevento 
        INNER JOIN archivoevento AS ar on ar.id = publicacionevento.id
        WHERE publicacionevento.estado ="activo" AND publicacionevento.tipo ="noticia" 
        
        https://roopashree-uthamacholan.medium.com/retrofit-common-errors-solved-d175d89660fe
        ;
       */

    $publicacion_noticia = Publicacioneventomodels::select('publicacionevento.id as id','publicacionevento.nombre AS nombre_publicacion','publicacionevento.descripcion AS descripcion_publicacion','publicacionevento.lugar',
    'publicacionevento.responsable','publicacionevento.estado','publicacionevento.tipo','ar.ruta AS ruta_archivo')
    ->join('archivoevento AS ar','ar.id','=','publicacionevento.id')
    //->where('publicacionevento.estado','=','activo')
    ->where('publicacionevento.tipo','=','noticia')
    ->get();
    return $publicacion_noticia;
    }

//consulta de  eventos 

public function eventos(){
    $publicacion_evento = Publicacioneventomodels::select('publicacionevento.id as id','publicacionevento.nombre AS nombre_publicacion','publicacionevento.descripcion AS descripcion_publicacion','publicacionevento.lugar',
    'publicacionevento.responsable','publicacionevento.estado','publicacionevento.tipo','ar.ruta AS ruta_archivo')
    ->join('archivoevento AS ar','ar.id','=','publicacionevento.id')
    //->where('publicacionevento.estado','=','activo')
    ->where('publicacionevento.tipo','=','evento')
    ->get();
    return $publicacion_evento;
}



    //eventos por fecha recientes priemero sacamos todos los eventos

    public function eventosporfechas(){

        //$eventos= Publicacioneventomodels:: where("tipo", "=", "evento")->whereDate('fecha_y_Hora','>=',now()->subDays(70))->select("id","nombre","tipo")
       // $eventos= Publicacioneventomodels:: where("tipo", "=", "evento")->whereBetween('fecha_y_Hora',[now()->subDays(10000),today()])->select("id","nombre","tipo")
       $eventos= Publicacioneventomodels:: where("tipo", "=", "evento")->whereMonth('fecha_y_Hora',now()->month)->whereYear('fecha_y_Hora',now()->year)->select("id","nombre","tipo")
        ->get();
        return $eventos;
    }
    
    public function noticiasporfechas(){

        //$eventos= Publicacioneventomodels:: where("tipo", "=", "evento")->whereDate('fecha_y_Hora','>=',now()->subDays(70))->select("id","nombre","tipo")
       // $eventos= Publicacioneventomodels:: where("tipo", "=", "evento")->whereBetween('fecha_y_Hora',[now()->subDays(10000),today()])->select("id","nombre","tipo")
       $noticias= Publicacioneventomodels:: where("tipo", "=", "noticia")->whereMonth('fecha_y_Hora',now()->month)->whereYear('fecha_y_Hora',now()->year)->select("id","nombre","tipo",'fecha_y_Hora')
        ->get();
        return $noticias;
    }

    

}
