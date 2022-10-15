<?php

namespace App\Http\Controllers;
use App\Models\Categoriamodels;
use Illuminate\Support\Facades\DB;//llamo la DB
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
        $validar_categoria=Validator::make($request->all(),
        ["nombre"=>"required"]);//required es necesario
        if(!$validar_categoria->fails())//si al validar no hay falla
          {
            $cat = new Categoriamodels();
            $cat->nombre = $request->nombre;
            $cat->descripcion = $request->descripcion;
            $cat->save();
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
        $categoriashow=Categoriamodels::Where('id',$id)->get();
        return $categoriashow;
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
        $validar_categoria=Validator::make
        ($request->all(),["nombre"=>"required"]);
        if(!$validar_categoria->fails())
        {
            $categorias = Categoriamodels::find($id);
                if(isset($categorias))
                {
                    $categorias->nombre= $request->nombre;
                    $categorias->descripcion = $request->descripcion;
                    $categorias->save();
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
        $categoriadestroy=Categoriamodels::find($id);
        if(isset($categoriadestroy))
        {
          $categoriadestroy->delete();
          return response()->json(['mensaje'=>"LA CATEGORIA SE ELIMINO CORRECTAMENTE"]);
        }
        else{
            return response()->json(['mensaje'=>"EL ID DE LA CATEGORIA NO FUE ENCONTRADO"]);
        }
        return response()->json([
            'mensaje'=>"ok",
            "id"=>$id,
            'nombre'=>$categoriadestroy
             ]);
    }


    public function consulta(){

        $categoria = Categoriamodels::where('nombre','=','Christopher Schumm')->get();
        return $categoria;
    }

    public function consulta2(){

        $categoria = Categoriamodels::where('nombre','LIKE',"j%")->get();
        return $categoria;
    }
    public function Categorias_publicacion()
    {
        /*SELECT c.nombre as nombre_categoria, p.nombre as nombre_publicacion FROM categoria c
         inner join detallecategoria  dc on dc.id_categoria = c.id
        INNER join publicacionevento p on p.id = dc.id_publicacion*/
        $categoria;

     //   $categorias = Categoriamodels::
    }
    public function Publicaciones_categoria()
    {
     //   $publicacion = Publicacioneventomodels::
    }
}
