<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitacaoController;
use Termwind\Components\Raw;

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

Route::resource('/home', SolicitacaoController::class)->only([
    'index', 'create','edit','destroy','store', 'update','show'
]);


 route::controller(SolicitacaoController::class)->group(function(){
    Route::get('/home', 'index')->name('home.index');
    Route::get('home/create', 'create')->name('home.create');
    Route::post('/home/salvar', 'store')->name('home.store');
    Route::delete('/home/delete/{solicitacao}', 'destroy')->name('home.destroy');
    Route::get('/home/{solicitacao}/edit', 'edit')->name('home.edit');
    Route::get('/home/{solicitacao}', 'update')->name('home.update');
}); 