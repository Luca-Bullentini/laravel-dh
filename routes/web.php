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

<<<<<<< HEAD

Route::get('/paridad/{numero?}', function ($numero = NULL) {
  return view('paridad', compact('numero'));
});

Route::get('/sumar/{numero1?}/{numero2?}/{numero3?}', function (int $numero1 = 0 ,int $numero2 = 0, int $numero3= 0) {
    $resultado = $numero1 + $numero2 + $numero3 ; 
  return view('sumar', compact('numero1', 'numero2', 'numero3' , 'resultado'));
  });
  
  
  Route::get('/', function () {
      return view('welcome');
  });
  
  Route::get('inicio', function () {
      return view('welcome');
  });
  
Route::get('peliculas/{peli1?}/{peli2?}', function ($peli1, $peli2) {
$vac=compact('peli1' , 'peli2');
    return view('peliculas', $vac);
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('peliculas', function () {
    return view('peliculas' );
>>>>>>> 2f6f1509e2291faf73d82d6080c70e3c269b2a8a
});

Route::get('peliculas/{id}', function ($id) {
    return view('detallePeliculas', compact("id"));
});

Route::get('/actores', 'ActorController@directory' );

Route::get('/actores/buscar', 'ActorController@search' );

Route::get('/actores/{id}', 'ActorController@show' );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
