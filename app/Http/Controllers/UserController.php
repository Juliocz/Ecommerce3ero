<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

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
            return redirect()->route('admin_dashboard');
            break;
        case 'user_simple':
            return redirect()->route('landing');
            break;
        default : return 'user_default';break;
    }

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

    public function modificarUsuario(Request $request){

        $u=User::getUserFromId($request->id);
        $u->nombre=$request->nombre;
        $u->usuario=$request->usuario;
        $u->password=md5($request->password);
        $u->nombre=$request->nombre;
        $u->apellido=$request->apellido;
        $u->correo=$request->correo;
        $u->celular=$request->celular;
        $u->tipo_usuario=$request->tipo_usuario;
        $u->departamento=$request->departamento;
        $u->estado=$request->estado;
        return $u->save();
    }
    public function deleteUsuario(Request $request){
        $u=User::getUserFromId($request->id);
        if($u->tipo_usuario=='super_admin')return response()->json(['message' => 'No se puede eliminar un super_admin'], 500);
        return $u->delete();
    }

    public function logoutUsuario(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing');
    }

    public function getDashboardAdmin(Request $request){
        return view('dashboard.dashboard_admin_');
    }

    public function uploadImagenGet(Request $request){
        $url_folder='midrive/userfiles/';
        if(Auth::user()->tipo_usuario=='super_admin'){
            $url_folder='midrive/adminfiles/';
        }
        $url_folder=$url_folder.Auth::user()->id.'/';


        //devuelvo archivos del usuario, creo su carpeta si no existe
        //devuelvo nombres de archivos con sus urls
        try{mkdir($url_folder, 0777,true);}catch(Throwable $ex){}//creo carpeta usuario
        $arrFiles = scandir($url_folder);//escaneo archivos
        $arrFilesUrl=array();
        foreach($arrFiles as $f){array_push($arrFilesUrl,route('landing').'/'.$url_folder.$f);}//obtengo urls reales
        return view('upload_image')
        ->with('mis_files_array',$arrFiles)
        ->with('arrFilesUrl',$arrFilesUrl);

    }
    //subir imagen
    //valida tamaño archivo, valida que sea una imagen, valida que maximo archivos por usuarios
    public function uploadImagenPost(Request $request){
        $name=$_FILES['archivo']['name'];
        $name_temp=$_FILES['archivo']['tmp_name'];
        //si es super admin, se sube archivos a carpeta midrive/adminfiles/userid/nombre_archivo
        if(Auth::user()->tipo_usuario=='super_admin'){

            try{mkdir("midrive/adminfiles/".Auth::user()->id,0777,true);}catch(Throwable $ex){}//creo carpeta usuario
            move_uploaded_file($name_temp,"midrive/adminfiles/".Auth::user()->id."/".$name);
            $arrFiles = scandir('midrive/adminfiles/'.Auth::user()->id);
            var_dump($arrFiles);
            return view('upload_image')
            ->with('mis_files_array',$arrFiles);

        }
        else{
            //para usuario simple falta validar tamaño, numero maximo de archivos, la extension ya esta validada
            try{mkdir("midrive/userfiles/".Auth::user()->id, 0777,true);}catch(Throwable $ex){}//creo carpeta usuario
            if(pathinfo($name)['extension']=='php')$name=$name.'.file';//si alguien trata de subir archivo php, lo renombra a .file
            //falta validar tamaño archivo
            //falta validar numero maximo de archivos del usuario
            move_uploaded_file($name_temp,"midrive/userfiles/".Auth::user()->id."/".$name);
        }
        return redirect()->route('upload_image_user');

    }
}
