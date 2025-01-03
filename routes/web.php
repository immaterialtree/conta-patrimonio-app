<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContagemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('home');
});

Route::resource('usuarios', UsuarioController::class);

Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::view('home', 'home')->name('home');
    Route::view('relatorios', 'relatorio.index')->name('relatorio.index');
    Route::view('patrimonios', 'patrimonio.index')->name('patrimonio.index');
});

Route::resource('usuarios', UsuarioController::class)->middleware('auth');
Route::resource('contagens', ContagemController::class)->parameters(['contagens' => 'contagem'])->middleware('auth');
