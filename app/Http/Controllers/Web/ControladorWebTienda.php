<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ControladorWebTienda extends Controller{

    public function index(){

        return view("web.tienda");

    }


}


?>