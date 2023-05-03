<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JubiladosController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\AyudasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them wilF
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class,'index']);

Route::get('/register', [RegisterController::class,'create'])->name('register.create');
Route::get('/register', [RegisterController::class,'store'])->name('register.store');
Route::get('/login', [SessionsController::class,'create'])->name('login.index');

Route::get('funcionarios', [FuncionariosController::class,'index'])->name('funcionarios');
Route::get('funcionarios/nuevo', [FuncionariosController::class,'create'])->name('funcionarios.create');
Route::post('funcionarios/store', [FuncionariosController::class,'store'])->name('funcionarios.store');


Route::get('jubilados', [JubiladosController::class,'index'])->name('jubilados');
Route::get('jubilados/nuevo', [JubiladosController::class,'create'])->name('jubilados.create');
Route::post('jubilados/store', [JubiladosController::class,'store'])->name('jubilados.store');


Route::get('ayudas', [AyudasController::class,'index'])->name('ayudas');
Route::get('ayudas/nuevo', [AyudasController::class,'create'])->name('ayudas.create');
Route::post('ayudas/store', [AyudasController::class,'store'])->name('ayudas.store');