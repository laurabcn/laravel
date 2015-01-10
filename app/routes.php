<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get("test", function(){
	$user = new User;
	
	$user->email = "laurariera9@gmail.com";
	$user->real_name = "Cuenta Prueba";
	$user->password = "test";
	
	$user->save();
	return "El usuario prueba ha sido salvado a la base de datos";
});

Route::controller('users', 'UsersController');

Route::controller('auth', 'UsersController');