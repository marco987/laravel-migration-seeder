<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indexPlace', 'ControllerPlace@index')->name('index.place');
Route::get('/createPlace', 'ControllerPlace@create')->name('create.place');
Route::post('/storePlace', 'ControllerPlace@store')->name('store.place');
Route::get('/{id}/edit', 'ControllerPlace@edit')->name('edit.place');
Route::post('/{id}', 'ControllerPlace@update')->name('update.place');
Route::get('/{id}/delete', 'ControllerPlace@destroy')->name('delete.place');
