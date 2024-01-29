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

    function modulo($id){
        
        switch ($id) {
            case 1:
                    $subModulos = TModulo::where('modulo_padre',1)->get();
                    return view('administracion.administracion',compact('subModulos'));
                break;
            
            default:
                return '404 not found';
                break;
        }

        
    }
}
