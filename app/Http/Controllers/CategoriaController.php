<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoriamodels;
use Illuminate\Support\Facades\DB;//llamo la DB
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria=Categoriamodels::all();
        return $categoria;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar_acta_entrega=Validator::make($request->all(),
        ["Nombre"=>"required"]);//required es necesario
        if(!$validar_acta_entrega->fails())//si al validar no hay falla
          {
            $acta_entrega = new Categoriamodels();
            $acta_entrega->Nombre = $request->Nombre;
            $acta_entrega->Descripcion = $request->Descripcion;
            $acta_entrega->save();
            return response()->json(['mensaje'=>"QUEDO GUARDADA LA CATEGORIA"]);
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
        $acta_entrega=Categoriamodels::Where('id',$id)->get();
        return $acta_entrega;
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
        $validar_acta_entrega=Validator::make
        ($request->all(),["Nombre"=>"required"]);
        if(!$validar_acta_entrega->fails())
        {
            $acta_entrega = Categoriamodels::find($id);
                if(isset($acta_entregas))
                {
                    $acta_entrega->Nombre= $request->Nombre;
                    $acta_entrega->Descripcion = $request->Descripcion;

                    $acta_entregas->save();
                    return response()->json(['mensaje'=>"QUEDO ACTUALIZADA ESA CATEGORIA"]);
                }
                 else{
                    return response()->json(['mensaje'=>" ESA CATEGORIA NO SE ENCONTRO"]);
                 }
        }
        else
        {
            return response()->json(['mensaje'=>" LA VALIDACION DE ESA CATEGORIA ES INCORRECTA"]);
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
        $acta_entrega=Categoriamodels::find($id);
        if(isset($acta_entrega))
        {
          $acta_entrega->delete();
          return response()->json(['mensaje'=>"LA CATEGORIA SE ELIMINO CORRECTAMENTE"]);
        }
        else{
            return response()->json(['mensaje'=>"EL ID DE LA CATEGORIA NO FUE ENCONTRADO"]);
        }
        return response()->json([
            'mensaje'=>"ok",
            "id"=>$id,
            'acta_entrega'=>$acta_entrega
             ]);
    }
}

