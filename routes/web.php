<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/api/agenda/{nombre}/{telefono}', 'AgendaController@guardar');
Route::get('/api/agenda','AgendaController@create');
Route::post('/api/agenda','AgendaController@store');

Route::get('/','AgendaController@create');
Route::post('/','AgendaController@store');
/*
Nuestras rutas de la API REST
*/

//OBTENER TODOS  LOS CONTACTOS
Route::get('/api/contacto', function(){

	return App\Agenda::all();

});

//OBTENER UN CONTACTO POR EL TELEFONO
Route::get('/api/contactos/telefono/{telefono}', function($telefono){

	return App\Agenda::where('telefono', $telefono)->get(['telefono']);

});

//OBTENER UN CONTACTO POR EL NOMBRE
Route::get('/api/contactos/nombre/{nombre}', function($nombre){

	return App\Agenda::where('nombre', $nombre)->get();

	

});

//OBTENER UN CONTACTO POR EL EMAIL
Route::get('/api/contactos/email/{email}', function($email)
{
	return App\Agenda::where('email', $email)->get();
});


//CREAR NUEVOS CONTACTOS
Route::post('/api/contactos', function (Request $request){

	return App\Agenda::create($request->all());

});
