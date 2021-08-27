<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'containers'], function () {
    Route::get('/', 'ContainerController@index');
    Route::post('/store', 'ContainerController@store');
    Route::get('/show/{id}', 'ContainerController@show');
    Route::put('/update/{id}', 'ContainerController@update');
    Route::delete('/destroy/{id}', 'ContainerController@destroy');
});


Route::group(['prefix' => 'movimentacoes'], function () {
    Route::get('/', 'MovimentacaoController@index');
    Route::post('/store', 'MovimentacaoController@store');
    Route::get('/show/{id}', 'MovimentacaoController@show');
    Route::put('/update/{id}', 'MovimentacaoController@update');
    Route::delete('/destroy/{id}', 'MovimentacaoController@destroy');
});


Route::group(['prefix' => 'relatorio'], function () {
    Route::get('/', 'RelatorioController@index');
    Route::get('/exportacao', 'RelatorioController@exportacao');
    Route::get('/importacao', 'RelatorioController@importacao');
});
