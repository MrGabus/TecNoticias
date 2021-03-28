<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/sobre-nos', [SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/conteudo/{page_id}', [ConteudoController::class, 'principalNoticia'])->name('site.conteudo');
Route::get('/noticia/{p1}', [NoticiasController::class, 'noticia'])->name('site.noticia');

