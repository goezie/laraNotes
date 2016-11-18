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
// WEB ROUTES
Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', ['uses' => 'NotesController@index']);
Route::get('/notes/add', ['uses' => 'NotesController@add']);
Route::post('/notes/add', ['uses' => 'NotesController@addNote']);

// API ROUTES
Route::post('/notes/add', ['uses' => 'NotesController@addNote']);
Route::get('/notes/delete/{id}', ['uses' => 'NotesController@delete']);