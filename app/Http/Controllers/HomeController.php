<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TModulo;

class HomeController extends Controller
{
    function inicio() {
        $modulos = TModulo::all();

        return view('inicio',compact('modulos'));
    }

    function admin(){
        return view('administracion.administracion');
    }
}
