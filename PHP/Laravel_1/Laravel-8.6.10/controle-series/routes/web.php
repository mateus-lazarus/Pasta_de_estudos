<?php

use App\Http\Controllers\SeriesController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/series', [SeriesController::class, 'index'])
    ->name('listar_series');


Route::get('/series/create', [SeriesController::class, 'create'])->name('criar_serie');

// Para funcionar o post, é necessário que se use @csrf dentro do formulário, pois é um critério de verificação do Laravel
Route::post('/series/create', [SeriesController::class, 'store']);

// O GET também é uma possibilidade
Route::delete('/series/{id}', [SeriesController::class, 'destroy']);