<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Primeira lógica com Laravel</h1>';
});
Route::get('/produto', [ProdutoController::class, 'lista'])->name('produtos.lista');

Route::get('/produto/detalhes/{id}', [ProdutoController::class, 'detalhes'])->name('produtos.detalhes')->where('id','[0-9]+');