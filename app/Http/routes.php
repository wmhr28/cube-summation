<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AppController@index');  
Route::get('iniciarTest', function()
{
   return redirect('/');
});
Route::post('iniciarTest', 'AppController@iniciarTest');
Route::get('siguienteTest', function()
{
   return redirect('/');
});
Route::post('siguienteTest', 'AppController@siguienteTest');

/*AJAX*/
Route::post('resultado', 'AppController@resultado');
Route::post('conf_operaciones', 'AppController@conf_operaciones');

 
