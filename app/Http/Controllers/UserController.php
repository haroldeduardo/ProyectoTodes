<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login(Request $request) {

        $request->validate([ //validator
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::where("email", "=", $request->email)->first();
        // revisamos si el id es existente
        if( isset($user->id) ){
            // Comprobamos la contraseña ---
            if(Hash::check($request->password, $user->password)){
                //creamos el token
                $token = $user->createToken("auth_token")->plainTextToken;
                //si está todo es correcto
                return response()->json([
                    "status" => 1,
                    "msg" => "usuario correctamente logeado",
                    "access_token" => $token,
                    "id" => $user->id,
                    "name" => $user->name,
                ]);
            }else{
                return response()->json([
                    "status" => 0,
                    "msg" => "password incorrecto",
                ]);
            }

        }else{
            return response()->json([
                "status" => 0,
                "msg" => "Usuario no registrado",
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=User::all();
        return $usuario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $usuariosshow=User::Where('id',$id)->get();
        return $usuariosshow;

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

        $validar_usuario=Validator::make
        ($request->all(),["nombre"=>"required"]);
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
}
