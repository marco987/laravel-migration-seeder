<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indexPlace', 'ControllerPlace@index');
