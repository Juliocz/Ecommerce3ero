<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
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
    public function getUsuarios(Request $request){
        if($request->query('find')==null || $request->query('find')=='null'){
            return User::getUsuarios();
        }
        else
        return User::findAllUsuarios($request->query('find'));
    }

    public function findUsuarios(Request $request){

        return User::findAllUsuarios($request->find);
    }
}
