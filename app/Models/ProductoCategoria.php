<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCategoria extends Model
{
    protected $table="productos_categorias";//nombre de la tabla
    protected $primaryKey="id";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar
    use HasFactory;


    public function categoria_banner()
    {
        return $this->hasMany(categoria_banner::class, 'id_productos_categorias','id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria','id');
    }
    //las categorias generales no pertenecen a ninguna tienda
    public static function getCategoriasGral($id_tienda=null,$json_parse=false){
        $categs=self::where('id_tienda',$id_tienda)->where('estado','activo')
        ->get();
        return $json_parse?json_decode(json_encode($categs)):$categs;
    }

    public static function getCategoriaGralWithBanner($id_tienda=null,$json_parse=false){
        $categs=self::where('id_tienda',$id_tienda)->where('estado','activo')
        ->with('categoria_banner')
        ->get();
        return $json_parse?json_decode(json_encode($categs)):$categs;
    }

    //OBTIENE UAN CATEGORIA CON SUS PRODUCTOS, 
    public static function getCategoriaWithProduct($id_categoria,$json_parse=false){
        
        
        $categoria=self::where('id',$id_categoria)->where('estado','activo')
        ->with('productos')
        ->get(); 

        return $json_parse?json_decode(json_encode($categoria)):$categoria;
    }

    //obtiene categorias
    public static function getCategorias($json_parse=false){
        return $json_parse?json_decode(json_encode(self::get())):self::get();
    }

    public static function getCategoriasActivas($json_parse=false){
        return $json_parse?json_decode(json_encode(self::where('estado','activo')->get())):self::get();
    }

    public static function findAllCategorias($value_find,$json_parse=false){
        $collection=self::where('nombre','LIKE','%'.$value_find.'%')
        ->orWhere('descripcion','LIKE','%'.$value_find.'%')
        ->orWhere('id','LIKE','%'.$value_find.'%')
        ->orWhere('id_tienda','LIKE','%'.$value_find.'%')
         ->get();

         return $json_parse?json_decode(json_encode($collection)):$collection;
    }
    public static function getCategoriaFromId($id,$json_parse=false){
        return $json_parse?json_decode(json_encode(self::where('id',$id)->first())):self::where('id',$id)->first();
    }


    public static function registrarCategoria($nombre,$descripcion,$icon_url,$banner_url,$estado='activo'){
        $pc=new ProductoCategoria();
        $pc->nombre=$nombre;
        $pc->descripcion=$descripcion;
        $pc->icon_url;
        $pc->banner_url=$banner_url;
        $pc->estado=$estado;
        return $pc->save();
    }
}
