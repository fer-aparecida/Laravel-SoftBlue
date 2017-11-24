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

Route::get('/','SitePublicoController@paginaPrincipal'); //Controller@função a ser iniciada
Route::get('/vitrine','SitePublicoController@produtos');
Route::get('/info','SitePublicoController@informacoes');
Route::get('/parametros','ParametrosControl@acessandoParametrosViaRequest');
Route::get('/formulario','ParametrosControl@formularioExibir');
Route::get('/formularioReceber','ParametrosControl@formularioReceber');
