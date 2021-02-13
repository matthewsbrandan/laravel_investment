<?php

Route::get('/',['uses' => 'Controller@homepage']);
Route::get('/cadastro',['uses' => 'Controller@cadastrar']);

/**
 * Routes to user auth
 */ 
Route::get('/login',['uses' => 'Controller@fazerLogin']);
Route::post('/login',['as' => 'user.login','uses' => 'Controller@login']);