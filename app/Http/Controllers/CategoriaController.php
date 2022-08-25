<?php

namespace App\Http\Controllers;

use App\Models\ProductoCategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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

    //obtiene todas los productos,categorias y tambien si hay query find, busca en nombre,descrip,id,id_tienda
    public function getCategorias(Request $request){
        if($request->query('find')==null || $request->query('find')=='null'){
            //no hay ningun alor a buscar
            return ProductoCategoria::getCategorias();
        }
        else
        return ProductoCategoria::findAllCategorias($request->query('find'));
    }


    public function registrarCategoria(Request $request){
        $result=ProductoCategoria::registrarCategoria(
            $request->nombre,
            $request->descripcion,
            $request->icon_url,
            $request->banner_url
        );
        if($result){
            return $result;
        }else{
            return response()->json(['message' => 'No se pudo registrar Categoria'], 500);
        }
    }

    public function modificarCategoria(Request $request){
        $pro=ProductoCategoria::where('id',$request->id)->first();
        if($pro==null)return response()->json(['message' => 'No se encontro la categoria a modificar'], 500);

        $pro->nombre=$request->nombre;
        $pro->descripcion=$request->descripcion;
        $pro->icon_url=$request->icon_url;
        $pro->banner_url=$request->banner_url;
        $pro->estado=$request->estado;
        $result=$pro->save();

        if($result){
            return $result;
        }else{
            return response()->json(['message' => 'No se pudo modificar Categoria'], 500);
        }
    }

    public function eliminarCategoria(Request $request){
        $u=ProductoCategoria::getCategoriaFromId($request->id);
        return $u->delete();
    }
}
