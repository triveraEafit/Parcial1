<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/pilots/create', 'App\Http\Controllers\PilotController@create')->name('pilots.create');
Route::post('/pilots', 'App\Http\Controllers\PilotController@store')->name('pilots.store');
Route::get('/pilots', 'App\Http\Controllers\PilotController@index')->name('pilots.index');
Route::get('/pilots/statistics', 'App\Http\Controllers\PilotController@statistics')->name('pilots.statistics');
