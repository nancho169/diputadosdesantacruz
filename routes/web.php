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


//RUTAS ACCESO
/*Route::get('/acceso/login',[AccesoController::class,'acceso_login'])->name('acceso_login');
Route::get('/acceso/loginout',[AccesoController::class,'logout'])->name('logout');
Route::POST('/acceso/login',[AccesoController::class,'acceso_login_post'])->name('acceso_login_post');
Route::get('/acceso/registro',[AccesoController::class,'acceso_registro'])->name('acceso_registro');
Route::post('/acceso/registro',[AccesoController::class,'acceso_registro_post'])->name('acceso_registro_post');*/
