<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ad_opciones_usuarios;
use App\ad_opciones;

class InicioController extends Controller
{
    public function index()
    {
        
        $id_user = \Auth::user()->id;
        

        $opciones = ad_opciones_usuarios::where('id_usuario', '=', $id_user)->get();   
       // echo json_encode($opciones);


        $opciones = ad_opciones_usuarios::join("ad_opciones","ad_opciones_usuarios.id_opcion","=","ad_opciones.id")
                ->where('ad_opciones_usuarios.id_usuario','=',$id_user)
                ->where('ad_opciones.nivel','>',0)
                ->select("ad_opciones.id","ad_opciones.id_opcion","ad_opciones.opcion","ad_opciones.link","ad_opciones.icono","ad_opciones.nivel","ad_opciones.orden")
                ->orderBy('ad_opciones.id_opcion','asc')
                ->orderBy('ad_opciones.nivel','asc')
                ->orderBy('ad_opciones.orden','asc')
                ->get();
        //echo json_encode($opciones);

        
        $value = Session::get('id');
        dd($value);
        //return view('layouts.admin');
    }
}
