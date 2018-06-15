<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('grupos','GrupoController');
Route::resource('dados','DadosSelecaoController');
Route::resource('noticias','NoticiaController');
Route::resource('dadosfases','FaseOneController');
Route::resource('dadosfases2','FaseOneController@storeFase2');
Route::resource('dadosfases2get','FaseOneController@indexFase2');
Route::resource('dadosfases3','FaseOneController@storeFase3');
Route::resource('dadosfases3get','FaseOneController@indexFase3');
Route::resource('dadospartidasdiarias','DadoDiarioController');
Route::resource('resultados','ResultadoController');
Route::resource('placarfaseone','FaseOneController@getResultsOne');
Route::resource('placarfasetwo','FaseOneController@getResultsTwo');
Route::resource('placarfasetree','FaseOneController@getResultsTree');
Route::resource('fasefinaloitavas','FaseFinalController');