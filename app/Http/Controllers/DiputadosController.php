<?php

namespace App\Http\Controllers;
use App\Models\Diputados;
use Illuminate\Http\Request;

class DiputadosController extends Controller
{
    public function index()
    {
        $diputados = Diputados::orderBy('id','desc')->get();
        //$capas = Capa::where( ['id_edificio'=>$id])->firstOrFail();
        return view('diputados.index', compact('diputados'));
    }


}
