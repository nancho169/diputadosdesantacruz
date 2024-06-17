<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[InicioController::class,'index'])->name('inicio'); 

//++++FIRMANTES
Route::get('firmantes',[InicioController::class,'firmantes'])->name('firmantes'); 
Route::get('ficha',[InicioController::class,'ficha'])->name('ficha'); 


//++++PROYECTOS
Route::get('proyectos',[InicioController::class,'proyectos'])->name('proyectos'); 