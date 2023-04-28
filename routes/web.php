<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionariosController;

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

Route::get('funcionarios', [FuncionariosController::class,'index'])->name('funcionarios');
Route::get('funcionarios/nuevo', [FuncionariosController::class,'create'])->name('funcionarios.create');
Route::post('funcionarios/store', [FuncionariosController::class,'store'])->name('funcionarios.store');

