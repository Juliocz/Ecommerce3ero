<?php

use App\Models\Producto;
use App\Models\ProductoCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

include_once 'user.php';
include_once 'super_admin.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('landing.landing');
})->name('landing');


//id_tienda, en caso tienda nulo devuelve la categoria general, ya que la categoria general no tiene tienda
//id_categoria, que categoria esta seleccionando
//page, que numde pagina
Route::get('/marketplace',function(Request $request){
    
    $id_tienda=$request->query('id_tienda');//traera las categorias de una tienda
    $id_categoria=$request->query('id_categoria');//idcateogira, en el query, si no existe sera null
    $page=$request->query('page');//numero de pagina
    if(!$page)$page=0;//si pagina es igual a null, se pone pagina 0
    $categorias_gral=ProductoCategoria::getCategoriaGralWithBanner($id_tienda,true);//obtengo categoria generales
    
    if(count($categorias_gral)==0){//Si esa tienda no tiene categoria
        return "Tienda no tiene cateogiras";
    }
    $categoria=null;
    //BUSCO LA CATEOGIRA SELECCIONADA EN EL ARRAY
    foreach($categorias_gral as $c){

        $c->url=route('marketplace')."?id_tienda=$id_tienda&id_categoria=".$c->id."&page=$page";
        if($id_categoria==$c->id){
            $categoria=$c;
        }
    }


    //SI NO SE ENVIO NINGUNA CATEGORIA POR EL QUERY, toma el primer elemento categoria
    if($categoria==null){//Si la categoria pedida no pertenece la categoria gral o de la tienda
        $categoria=$categorias_gral[0];
        //return "NINGUNA CATEGORIA SELECCIONADA";
    }

    //OBTENGO LOS PRODUCTOS PAGINADOS DE ESA CATEGORIA
    $productos_paged=Producto::getProductoPaginateFromIdCategoriaWithImgs($id_categoria,$page,true);

    //return json_decode(json_encode(ProductoCategoria::where('id',$id_categoria)->with('productos')));
    //return json_decode(json_encode(ProductoCategoria::where('id',$id_categoria)->with('productos.producto_imgs')->first()));
    return view('mercado.mercado')
    ->with('categorias',$categorias_gral)//Todas las catye
    ->with('categoria',$categoria)
    ->with('productos_paged',$productos_paged)
    ;

   

})->name('marketplace');

Route::get('/md5',function(Request $request){
    return md5($request->query('pass'));
});


