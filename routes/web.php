<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get("livros", "App\Http\Controllers\LivroController@index")->name("livros.index");
Route::get("livros/cadastro", "App\Http\Controllers\LivroController@create")->name("livros.create");
Route::post("livros/cadastro", "App\Http\Controllers\LivroController@store")->name("livros.store");
Route::get("livros/{id}/editar", "App\Http\Controllers\LivroController@edit")->name("livros.edit");
Route::put("livros/{id}/editar", "App\Http\Controllers\LivroController@update")->name("livros.update");
Route::delete("livros/{id}", "App\Http\Controllers\LivroController@destroy")->name("livros.destroy");
Route::get("livros/{id}", "App\Http\Controllers\LivroController@show")->name("livros.show");
Route::post("livros/novo-livro}", 'LivroController@buscar')->name('livros.buscar');
