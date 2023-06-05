<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RutasProtegidasAdminController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

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
/*Rutas del login*/

Route::get('/',[LoginController::class,'login'])->name('login');
Route::get('/nuevoAdmin',[LoginController::class,'nuevoAdmin'])->name('nuevoAdmin'); 
Route::post('/accesoLogin',[LoginController::class,'accesoLogin'])->name('accesoLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::view('/credit','admin.credit');
Route::view('/users','admin.users');

/*Rutas del administrador*/
Route::get('/dashboard',[RutasProtegidasAdminController::class,'dashboard'])->name('dashboard');
Route::get('/registro',[RutasProtegidasAdminController::class,'registro'])->name('registro');
Route::post('/registro_post',[RutasProtegidasAdminController::class,'registro_post'])->name('registroPost');
Route::get('/registrar_horas',[RutasProtegidasAdminController::class,'registrar_horas'])->name('registrarHoras');
Route::get('/registrar_horas_post',[RutasProtegidasAdminController::class,'registrar_horas_post'])->name('registrarHorasPost');

/*Rutas de los estudiantes*/


/*Rutas del servicio*/


/*Ruta para generar el PDF*/
Route::get('/pdf', [PDFController::class, 'generatePDF']);


