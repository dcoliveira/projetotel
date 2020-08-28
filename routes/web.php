<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Middleware\Middleware;

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

//Route::get('/', function () {
//    return view('index');
//}); 

Auth::routes();

Route::get('/', 'ControladorPessoas@index');

//Route::get('/', 'ControladorPessoas@index') -> middleware('meumiddleware');
Route::get('/pessoas/novo', 'ControladorPessoas@create');
Route::get('/pessoas/lista', 'ControladorPessoas@show');
Route::get('/pessoas/edita/{id}', 'ControladorPessoas@edit');
Route::get('/pessoas/delete/{id}', 'ControladorPessoas@destroy');
Route::post('/pessoas/{id}', 'ControladorPessoas@update');

Route::post('/pessoas', 'ControladorPessoas@store');


Route::get('/home', 'HomeController@index')->name('home');
