<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detallecategoriaomodels;
use Illuminate\Support\Facades\Validator;

class DetallepublicacioncategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle=Detallecategoriaomodels::all();
        return $detalle;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar_detallecategoria=Validator::make($request->all(),
        ["id_publicacion"=>"required","id_categoria"=>"required"]);//required es necesario
        if(!$validar_detallecategoria->fails())//si al validar no hay falla
          {
            $detallecategoria = new Detallecategoriaomodels();
           // $detallecategoria->prioridad = $request->prioridad;
            $detallecategoria->id_publicacion = $request->id_publicacion;
            $detallecategoria->id_categoria = $request->id_categoria;
          
            $detallecategoria->save();
            return response()->json(['mensaje'=>"QUEDO GUARDADA  detalle cataegoria"]);
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
        
        

        $detalle = Detallecategoriaomodels::select('detallecategoria.id AS id_detalle','detallecategoria.id_publicacion AS id_publicacion','detallecategoria.prioridad AS Prioridad_detallle','p.nombre AS nombre_publicacion','c.nombre as Nombresdecategorias','c.descripcion as Descripciodecategorias')
        ->join('categoria AS c','c.id','=','detallecategoria.id_categoria')
        ->join('publicacionevento AS p','p.id','=','detallecategoria.id_publicacion')
        ->Where('p.id',$id)
        ->get();
        return $detalle;

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

    public function detallle_categoria()
    {
       
        $detalle = Detallecategoriaomodels::select('detallecategoria.id AS id_detalle','detallecategoria.prioridad AS Prioridad_detallle','p.nombre AS nombre_publicacion','c.nombre as Nombresdecategorias','c.descripcion as Descripciodecategorias')
        ->join('categoria AS c','c.id','=','detallecategoria.id_categoria')
        ->join('publicacionevento AS p','p.id','=','detallecategoria.id_publicacion')
         ->get();
        return $detalle;

     

    }
}
