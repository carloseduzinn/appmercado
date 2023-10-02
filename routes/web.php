<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\mercadoController;

//// Rotas para View

Route::get('/',[mercadoController::class,'tela1'])->name('index');

Route::get('/about',[mercadoController::class,'tela'])->name('about');

Route::get('/aplicativo',[mercadoController::class,'tela2'])->name('aplicativo');


/////////////////////////////////////////////////////////////////////////////////

Route::get('/aplicativo', [mercadoController::class, 'produtomenu'])->name('aplicativo');

Route::get('/buscar-preco', [mercadoController::class, 'buscarPreco']);




// UPDATE HOJE////////////////////////////////////////////////////////////////////////
Route::get('/cadastro',function(){return view('cadastro');})->name('view.cadastro');
Route::post('/cadastro' , [mercadoController::class, 'salvarDispositivo'])->name('salvar-dispositivo');

