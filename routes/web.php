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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'InicioController@index');
Auth::routes();

/* */
Route::get('/mostrarHome', 'InicioController@mostrarHome')->name('mostrarHome');
Route::get('/mostrarEscuchanos', 'InicioController@mostrarEscuchanos')->name('mostrarEscuchanos');
Route::get('/mostrarRedes', 'InicioController@mostrarRedes')->name('mostrarRedes');
Route::get('/mostrarFondo/{nombre}', 'InicioController@mostrarFondo')->name('mostrarFondo');
Route::get('/mostrarShow', 'InicioController@mostrarShow')->name('mostrarShow');
Route::get('/mostrarDiscografia', 'InicioController@mostrarDiscografia')->name('mostrarDiscografia');
Route::get('/mostrarGaleria', 'InicioController@mostrarGaleria')->name('mostrarGaleria');
Route::get('/mostrarVideo', 'InicioController@mostrarVideo')->name('mostrarVideo');
/**/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/formulario/','HomeController@formulario')->name('formulario');
Route::get('/admin/escuchanos','escuchanosController@formulario')->name('formularioEscuchanos');
Route::get('/admin/galeria/','galeriaController@formulario')->name('formularioGaleria');
Route::get('/admin/discografia/','discografiaController@formulario')->name('formularioDiscografia');
Route::get('/admin/show/','showController@formulario')->name('formularioShow');
Route::get('/admin/contacto/','contactoController@formulario')->name('formularioContacto');
Route::get('/admin/redes/','redesController@formulario');
Route::get('/admin/videos/','videoController@formulario');
Route::get('/admin/fondos/','fondosController@formulario');

Route::post('/admin/escuchanos/grabar','escuchanosController@grabar')->name('escuchanos.grabar');
Route::post('/admin/home/grabar','HomeController@grabar')->name('home.grabar');
Route::post('/admin/galeria/grabar','galeriaController@grabar')->name('galeria.grabar');
Route::post('/admin/discografia/grabar','discografiaController@grabar')->name('discografia.grabar');
Route::post('/admin/show/grabar','showController@grabar')->name('show.grabar');
Route::post('/admin/contacto/grabar','contactoController@grabar')->name('contacto.grabar');
Route::post('/admin/redes/grabar','redesController@grabar')->name('redes.grabar');
Route::post('/admin/videos/grabar','videoController@grabar')->name('videos.grabar');
Route::post('/admin/fondos/grabar','fondosController@grabar')->name('fondos.grabar');

Route::get('/admin/borrar/galeria/{id}','galeriaController@destroy');
Route::get('/admin/borrar/contacto/{id}','contactoController@destroy');
Route::get('/admin/borrar/show/{id}','showController@destroy');
Route::get('/admin/borrar/discografia/{id}','discografiaController@destroy');
Route::get('/admin/borrar/escuchanos/{id}','escuchanosController@destroy');
Route::get('/admin/borrar/formulario/{id}','HomeController@destroy');
Route::get('/admin/borrar/redes/{id}','RedesController@destroy');
Route::get('/admin/borrar/videos/{id}','videoController@destroy');

Route::get('/editar/formulario/{id}','HomeController@edit');
Route::post('/update/home/','HomeController@update')->name('home.update');
Route::get('/editar/escuchanos/{id}','escuchanosController@edit');
Route::post('/update/escuchanos/','escuchanosController@update')->name('escuchanos.update');
Route::get('/editar/show/{id}','showController@edit');
Route::post('/update/show/','showController@update')->name('update.show');
Route::get('/editar/discografia/{id}','discografiaController@edit');
Route::post('/update/discografia/','discografiaController@update')->name('update.discografia');
Route::get('/editar/galeria/{id}','galeriaController@edit');
Route::post('/update/galeria/','galeriaController@update')->name('update.galeria');
Route::get('/editar/contacto/{id}','contactoController@edit');
Route::post('/update/contacto/','contactoController@update')->name('update.contacto');
Route::get('/editar/redes/{id}','redesController@edit');
Route::post('/update/redes/','redesController@update')->name('update.redes');
Route::get('/editar/fondos/{id}','fondosController@edit');
Route::post('/update/fondos/','fondosController@update')->name('update.fondos');

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
