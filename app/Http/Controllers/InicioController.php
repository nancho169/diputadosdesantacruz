<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
     public function index()
    {
        //$capas = Capa::where( ['id_edificio'=>$id])
        //$capas = Capa::where( ['id_edificio'=>$id])->firstOrFail();
        return view('inicio.index');
    }

    public function firmantes()
    {
        //$capas = Capa::where( ['id_edificio'=>$id])
        //$capas = Capa::where( ['id_edificio'=>$id])->firstOrFail();
        return view('firmantes.index');
    }

    public function proyectos()
    {
        //$capas = Capa::where( ['id_edificio'=>$id])
        //$capas = Capa::where( ['id_edificio'=>$id])->firstOrFail();
        return view('proyectos.index');
    }


}
