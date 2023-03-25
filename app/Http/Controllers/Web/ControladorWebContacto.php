<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ControladorWebContacto extends Controller{

    public function index(){

        return view("web.contacto");

    }
}