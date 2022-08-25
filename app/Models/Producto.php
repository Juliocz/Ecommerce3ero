<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Producto extends Model
{
    protected $table="producto";//nombre de la tabla
    protected $primaryKey="id";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar
    use HasFactory;

    public function producto_imgs()
    {
        return $this->hasMany(Producto_img::class, 'id_producto','id');
    }

    public static function getProductoPaginateFromIdCategoriaWithImgs($id_categoria,$page=null,$json_parse=false){
        $obj=self::where('id_categoria',$id_categoria)
        ->with('producto_imgs')
        ->paginate(30, $columns = ['*'], $pageName = 'page', $page = null)
        ;
        return $json_parse?json_decode(json_encode($obj)):$obj;
    }
}
