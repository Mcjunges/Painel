<?php

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
View::composer("*",function($view){
   $view->with("user", auth()->user()); 
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'Home\HomeController@index')->name('Home.index');


Route::get('/Painel', 'Painel\PainelController@index')->name('Painel.index');
Route::get('/Painel/Usuarios', 'Painel\PainelController@viewUsuarios')->name('Painel.Usuarios.index');
Route::get('/Painel/Usuarios/create', 'Painel\PainelController@viewCreate')->name('Painel.Usuarios.create');
Route::post('/Painel/Usuarios/store', 'Painel\PainelController@viewStore')->name('Painel.Usuarios.store');