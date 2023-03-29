<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(array('domain' => '127.0.0.1'), function () {

    /*********************************************************
     *                                                       *
     *                                                       *
     *                     PAGINA PUBLICA                    *
     *                                                       *
     *                                                       *
     *********************************************************/


    Route::get('/', 'App\Http\Controllers\Web\ControladorWebHome@index');
    Route::get("/tienda", 'App\Http\Controllers\Web\ControladorWebTienda@index');
    Route::get("/nosotros", 'App\Http\Controllers\Web\ControladorWebNosotros@index');
    Route::get("/contacto", 'App\Http\Controllers\Web\ControladorWebContacto@index');
    Route::get("/tienda-unica", 'App\Http\Controllers\Web\ControladorWebTiendaUnica@index');


    /*********************************************************
     *                                                       *
     *                                                       *
     *                     PAGINA PRIVADA                    *
     *                                                       *
     *                                                       *
     *********************************************************/

     Route::get("/admin","App\Http\Controllers\Admin\ControladorAdminInicio@index");
     Route::get("/admin/productos", "App\Http\Controllers\Admin\ControladorAdminProducto@index");
     Route::get("/admin/producto/nuevo","App\Http\Controllers\Admin\ControladorAdminProducto@nuevo");
     Route::get("/admin/clientes", "App\Http\Controllers\Admin\ControladorAdminCliente@index");
     Route::get("/admin/cliente/nuevo", "App\Http\Controllers\Admin\ControladorAdminCliente@nuevo");
     Route::get("/admin/categorias", "App\Http\Controllers\Admin\ControladorAdminCategoria@index");
     Route::get("/admin/categoria/nuevo", "App\Http\Controllers\Admin\ControladorAdminCategoria@nuevo");


});

?>