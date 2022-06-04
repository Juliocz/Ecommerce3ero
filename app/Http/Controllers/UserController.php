<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function loginUsuario(Request $request){

  /*return $request->email;*/
  $user=User::isExist($request->usuario,md5($request->password));//compruebo credencial
  if(!$user){return "No existe usuario".md5($request->password);

}
  else {  //si existe , devuelvo una sesion

    if($user->estado!='activo'){
        return "usuario inactivo";
    }
    Auth::login($user);
    $request->session()->regenerate();
    switch($user->tipo_usuario){
        case 'super_admin':
            return "Usuario login super";
            break;
        case 'user_simple':
            return "Usuario login simple";
            break;
        default :'user_default';break;
    }

      return redirect()->route('landing');

  }
    }
    public function registrarUsuario(Request $request){
        $u=new User();
        $u->usuario=$request->usuario;
        $u->password=md5($request->password);
        $u->nombre=$request->nombre;
        $u->apellido=$request->apellido;
        $u->correo=$request->correo;
        $u->tipo_usuario="user_simple";
        $u->estado="pendiente";
        //$u->fecha_mod=Carbon::now();
        $u->fecha_registro=Carbon::now();
        $u->celular=$request->celular;
        $u->departamento=$request->departamento;
        //$u->ubicacion_lat=null;
        //$u->ubicacion_lon=null;

        $iduser=$u->save();

        return "Se registro usuario correctamente: ".$iduser;

        //return json_encode($request->all());
    }

    public function logoutUsuario(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing');
    }
}
