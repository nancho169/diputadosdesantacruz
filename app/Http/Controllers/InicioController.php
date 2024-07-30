<?php

namespace App\Http\Controllers;
use App\Models\Firmantes;
use App\Models\Proyectos;
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
        $datos = Firmantes::orderBy('id','desc')->get();
        return view('firmantes.index', compact('datos'));
    }

    public function ficha()
    {
        //$datos = Firmantes::orderBy('id','desc')->get();
        return view('firmantes.ficha');
    }

    public function proyectos()
    {
        $datos = Proyectos::orderBy('id','desc')->get();
        return view('proyectos.index', compact('datos'));
    }

    public function comisiones(){
        return view('comisiones.index');
    }


}
