<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ControladorWebHome extends Controller{

    public function index(){

        return view("web.index");

    }


}


?>