<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{


public function index()
    {
        $usuario=User::all();
        return $usuario;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar_usuario=Validator::make($request->all(),
        ["nombre"=>"required"]);//required es necesario
        if(!$validar_usuario->fails())//si al validar no hay falla
          {
            $usuario= new User();
           
            $usuario->identificacion = $request->identificacion;
            $usuario->nombre = $request->nombre;
            $usuario->fecha_nacimiento = $request->fecha_nacimiento;
            $usuario-> email = $request->email;
            $usuario->password = $request->password;
            $usuario->save();
            return response()->json(['mensaje'=>"QUEDO GUARDADO EL USUARIO"]);
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
        $usuariosshow=User::Where('id',$id)->get();
        return $usuariosshow;
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
        $validar_usuario=Validator::make(
            $request->all(),["nombre"=>"required"]);
        if(!$validar_usuario->fails())
        {
            $usuario = User::find($id);
                if(isset($usuario))
                {
                    $usuario->identificacion = $request->identificacion;
                    $usuario->nombre = $request->nombre;
                    $usuario->fecha_nacimiento = $request->fecha_nacimiento;
                    $usuario-> email = $request->email;
                    $usuario->password = $request->password;
                    
                    $usuario->save();
                    return response()->json(['mensaje'=>"USUARIO ACTUALIZADO"]);
                }
                 else{
                    return response()->json(['mensaje'=>" EL USUARIO NO SE ENCONTRO"]);
                 }
        }
        else
        {
            return response()->json(['mensaje'=>" LA VALIDACION DE USUARIO ES INCORRECTA"]);
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
        $usuariodestroy=User::find($id);
        if(isset($usuariodestroy))
        {
          $usuariodestroy->delete();
          return response()->json(['mensaje'=>"EL USUARIO SE ELIMINO CORRECTAMENTE"]);
        }
        else{
            return response()->json(['mensaje'=>"EL ID DEL USUARIO NO FUE ENCONTRADO"]);
        }
        return response()->json([
            'mensaje'=>"ok",
            "id"=>$id,
            'nombre'=>$usuariodestroy
             ]);
    }
    public function registrar(Request $request)
    {
            $validar_registro=Validator::make($request->all(),
            ["password"=>"required"]);
            if(!$validar_registro->fails())
            {
                $usuario=new User();
                $usuario->identificacion = $request->identificacion;
                $usuario->nombre = $request->nombre;
                $usuario->apellido = $request->apellido;
                $usuario->fecha_nacimiento = $request->fecha_nacimiento;
                $usuario->email = $request->email;
                $usuario->password = $request->password;
                $usuario->save();
                return response()->json(['mensaje'=>"EL USUARIO SE REGISTRO CORRECTAMENTE"]);
          
            }
            
           // return response()->json(['mensaje'=>"Usuario registrado correctamente"]);
    }
    public function login(Request $request)
    {
        $usu=User::Where('email',$request->email)->get();
        
            if($usu->password==$request->password)
            {
                return response()->json(['mensaje'=>"Usuario correcto"]);
                return $usu;
            }
            else
            {
                return response()->json(['mensaje'=>"Usuario incorrecto"]);
            }
        
        
    }
}
    ?>
