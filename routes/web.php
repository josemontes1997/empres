<?php

use Illuminate\Support\Facades\Route;

/*agregar cotroladores*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\DashboardController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('empresas/pdf', [App\Http\Controllers\EmpresaController::class, 'pdf'])->name('empresas.pdf');
Route::get('empresas/grafica', [App\Http\Controllers\EmpresaController::class, 'grafica'])->name('empresas.grafica');




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('empresas', EmpresaController::class);
});






