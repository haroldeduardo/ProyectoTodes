<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Spatie\Permission\Traits\HasRoles;


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
            $roles = $user->getRoleNames();
            $check=Hash::check($request->password ,$user->password);
            // Comprobamos la contraseña ---
            if(Hash::check($request->password ,$user->password)){
                //creamos el token
                $token = $user->createToken("auth_token")->plainTextToken;
                //si está todo es correcto
                return response()->json([
                    "status" => 1,
                    "msg" => "usuario correctamente logeado",
                    "access_token" => $token,
                    "id" => $user->id,
                    "name" => $user->nombre,
                    "apellido" => $user->apellidos,
                    "email" => $user->email,
                     "rol"=>$roles,
                    "log"=> $check
                ]);
            }else{
                return response()->json([
                    "status" => 0,
                    "msg" => "usuario incorrecto logeado",
                    
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

        $usuariosConRol = User::has('roles')->get();
        //$usuariosConRol=User::all();
        //$usuario->getRoleNames();
        return $usuariosConRol;
    }

    public function create()
        {
           $roles = Role::pluck('name', 'name')->all(); 
           return $roles;
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
            $usuario->apellidos = $request->apellidos;
            $usuario->genero = $request->genero;
            $usuario->fecha_nacimiento = $request->fecha_nacimiento;
            $usuario-> email = $request->email;
            $usuario->password = Hash::make($request->password); 
            $usuario->save();
            return response()->json(['mensaje'=>"Usuario  quedo guardado"]);
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
        $validar_usuario=Validator::make
        ($request->all(),["nombre"=>"required"]);

        if(!$validar_usuario->fails())
        {
            $usuario = User::find($id);
                if(isset($usuario))
                {
                    $usuario->identificacion = $request->identificacion;
                    $usuario->nombre = $request->nombre;
                    $usuario->apellidos = $request->apellidos;
                    $usuario->fecha_nacimiento = $request->fecha_nacimiento;
                    $usuario-> email = $request->email;
                    $usuario->password = Hash::make($request->password);
                    
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
                $usuario->apellidos = $request->apellidos;
                $usuario->genero=$request->genero;
                $usuario->fecha_nacimiento = $request->fecha_nacimiento;
                $usuario->email = $request->email;
                $usuario->password = Hash::make($request->password); 
                $usuario->save();
                $usuario->assignRole('UserComunidad');
                return response()->json(['mensaje'=>"EL USUARIO SE REGISTRO CORRECTAMENTE"]);
            }
            
           // return response()->json(['mensaje'=>"Usuario registrado correctamente"]);
    }


/*
    //Se comenta por existir uno de la rama de Yuliet
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
    */
    /**
     *funcion que esta mostrando los roles por el id  del usuario
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUsersRoles($id)
    {
        $usuario=User::Where('id','=',$id)->first();
        
        return $usuario->getRoleNames();;
    }

}

?>

