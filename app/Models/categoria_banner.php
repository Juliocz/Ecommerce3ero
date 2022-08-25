<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria_banner extends Model
{

    protected $table="categoria_banner_img";//nombre de la tabla
    protected $primaryKey="id";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar
    use HasFactory;
}
