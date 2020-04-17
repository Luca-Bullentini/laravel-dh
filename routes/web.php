<?php

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
});
