<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TModulo;

class HomeController extends Controller
{
    function inicio() {
        $modulos = TModulo::where('modulo_padre', null)->get();

        return view('inicio',compact('modulos'));
    }

    function modulo($id){
        
        switch ($id) {
            case 1:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->get();
                    return view('administracion.administracion',compact('subModulos'));
                break;
            case 2:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('contabilidad.contabilidad',compact('subModulos'));
                break;
            case 3:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('planillas.planillas',compact('subModulos'));
                break;
            case 3:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('planillas.planillas',compact('subModulos'));
                break;
            case 4:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('activo-fijo.activo-fijo',compact('subModulos'));
                break;
            case 5:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('activo-fijo.activo-fijo',compact('subModulos'));
                break;
            case 6:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('iva.iva',compact('subModulos'));
                break;
            case 7:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('cuentas-pagar.cuentas-pagar',compact('subModulos'));
                break;
            case 8:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('cuentas-cobrar.cuentas-cobrar',compact('subModulos'));
                break;
            case 9:
                    $subModulos = TModulo::where('modulo_padre',$id)->orWhere('modulo_padre',99)->orderBy('modulo_padre')->get();
                    return view('bancos.bancos',compact('subModulos'));
                break;
            default:
                return '404 not found';
            break;
        }

        
    }
}
