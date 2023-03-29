<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ControladorAdminCategoria extends Controller{

    public function index(){

        return view("web.categorias");

    }

}


?>