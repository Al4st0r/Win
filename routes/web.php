<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContratosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('HomeView');
});
Route::get('/login',function(){
    return view('auth.Login');
});
Route::get('Compra', function(){
    return view('user.CompraUser');
});

route::get('/registrarse', function(){
    return view('auth.register');
});
Route::get('/user',[ClienteController::class, 'IndexUser']);
Route::post('contratos', [ContratosController::class, 'añadir'])->name('contratos.store');

/*---- autenticacion ----*/
Auth::routes();

/*---- se ejecuta despues de la autenticacion ----*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
