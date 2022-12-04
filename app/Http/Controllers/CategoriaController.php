<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoriamodels;
use Illuminate\Support\Facades\DB;
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



    public function busquedadenombres($nombre)
    {
        $categoriashow=Categoriamodels::Where('nombre',$nombre)->get();
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
    /*  SELECT c.nombre as nombre_categoria, COUNT(p.id) FROM categoria c
         inner join detallecategoria  dc on dc.id_categoria = c.id
         INNER join publicacionevento p on p.id = dc.id_publicacion
         GROUP by c.nombre; */
         $categorias = Categoriamodels::select('categoria.nombre AS nombre_categoria',DB::raw('count(p.id) AS total'))
         ->join('detallecategoria AS dc','dc.id_categoria','=','categoria.id')
         ->join('publicacionevento AS p','p.id','=','dc.id_publicacion')
         ->groupBy('categoria.nombre')
         ->get();
         return $categorias;
     }
     public function Publicaciones_categoria()
     {
          /*SELECT c.nombre as nombre_categoria, p.nombre as nombre_publicacion FROM categoria c
          inner join detallecategoria  dc on dc.id_categoria = c.id
          INNER join publicacionevento p on p.id = dc.id_publicacion  */
          //DB::table('categoria AS c')
         $publicacion_por_categoria = Categoriamodels::select('categoria.nombre AS nombre_categoria','p.nombre AS nombre_publicacion','dc.prioridad as Prioridades')
         ->join('detallecategoria AS dc','dc.id_categoria','=','categoria.id')
         ->join('publicacionevento AS p','p.id','=','dc.id_publicacion')
          ->get();
         return $publicacion_por_categoria;
     }
 
     public function Estadoactiva_publicacion()
     {
          /*SELECT c.nombre as nombre_categoria,p.nombre as nombre_publicacion, p.estado  FROM categoria c
            inner join detallecategoria  dc on dc.id_categoria = c.id
            INNER join publicacionevento p on p.id = dc.id_publicacion
             WHERE p.estado="activo" ;*/
         $publicacion_por_categoria = Categoriamodels::select('categoria.nombre AS nombre_categoria','p.nombre AS nombre_publicacion','p.estado AS estado')
         ->join('detallecategoria AS dc','dc.id_categoria','=','categoria.id')
         ->join('publicacionevento AS p','p.id','=','dc.id_publicacion')
         ->where('p.estado','=','activo')
          ->get();
         return $publicacion_por_categoria;
     }

     public function Estadoinactiva_publicacion()
     {
          /*SELECT c.nombre as nombre_categoria,p.nombre as nombre_publicacion, p.estado  FROM categoria c
            inner join detallecategoria  dc on dc.id_categoria = c.id
            INNER join publicacionevento p on p.id = dc.id_publicacion
             WHERE p.estado="inactivo";*/
         $publicacion_por_categoria =Categoriamodels::select('categoria.nombre AS nombre_categoria','p.nombre AS nombre_publicacion','p.estado AS estado')
         ->join('detallecategoria AS dc','dc.id_categoria','=','categoria.id')
         ->join('publicacionevento AS p','p.id','=','dc.id_publicacion')
         ->where('p.estado','=','inactivo')
          ->get();
         return $publicacion_por_categoria;
     }

     


    
}

