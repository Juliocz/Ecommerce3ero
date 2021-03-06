<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    protected $table="user";//nombre de la tabla
    protected $primaryKey="id";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function isExist($user,$password){
        return self::where('usuario',$user)
        ->where('password',$password)->first();
    }

    //obtiene usuarios
    public static function getUsuarios($json_parse=false){
        return $json_parse?json_decode(json_encode(self::get())):self::get();
    }
    //get usuario byid
    public static function getUserFromId($id,$json_parse=false){
        return $json_parse?json_decode(json_encode(self::where('id',$id)->first())):self::where('id',$id)->first();
    }
}
