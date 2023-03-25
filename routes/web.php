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


    Route::get('/', 'App\Http\Controllers\Web\ControladorWebHome@index');
    Route::get("/tienda", 'App\Http\Controllers\Web\ControladorWebTienda@index');
    Route::get("/nosotros", 'App\Http\Controllers\Web\ControladorWebNosotros@index');
    Route::get("/contacto", 'App\Http\Controllers\Web\ControladorWebContacto@index');


});

?>