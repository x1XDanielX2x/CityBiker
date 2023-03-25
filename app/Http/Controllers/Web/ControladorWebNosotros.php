<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ControladorWebNosotros extends Controller{

    public function index(){

        return view("web.nosotros");

    }

}