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
Route::get('logout', 'LoginController@logout');
Route::post('logout', 'LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::view('/', 'index');

Route::view('/nosotros', 'about');

Route::get('/destinos', 'ProductsController@index');

Route::get('destinos/{id}', 'ProductsController@show');

Route::post('/destinos{id}', 'CartController@store');


Route::get('/carrito', 'CartController@index');

Route::post('/carrito', 'CartController@destroy');

Route::view('/faq', 'faq');

Route::get('/contacto', 'ContactUsController@index');
Route::post ('/contacto' , 'ContactUsController@contactUSPost');


Route::get('/perfil', 'UserController@userprofile');
Route::post('/perfil', 'UserController@updateAvatar');

Route::get('/order', 'OrderController@index');
Route::post('/order', 'OrderController@back');

Route::get('/ABM/main', 'ABMcontroller@index')->middleware('admin');

Route::get('ABM/edit/{id}', 'ABMcontroller@ABMdirect')->middleware('admin');

Route::post('/ABM/edit', 'ABMcontroller@edit')->middleware('admin');

Route::get('ABM/edit/{id}/borrarFoto', 'ABMcontroller@borrarFoto')->middleware('admin');
Route::get('ABM/edit/{id}/borrarHighlight', 'ABMcontroller@borrarHighlight')->middleware('admin');
Route::get('ABM/edit/{id}/borrarInclude', 'ABMcontroller@borrarInclude')->middleware('admin');

Route::view('ABM/add', '/ABM/add')->middleware('admin');
Route::post('ABM/add', 'ABMcontroller@add')->middleware('admin');

Route::get('ABM/destroy/{id}', 'ABMcontroller@delete')->middleware('admin');
