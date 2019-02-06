<?php

// Route::get('/', function () {
//     return view('genres');
// });
Route::get('/', function () {
    return view('layout');
});
Route::get('/genres', 'GenresController@index');
Route::get('/genres/{id}/edit', 'GenresController@edit');
Route::get('/tracks', 'TracksController@index');
Route::get('/tracks/new', 'TracksController@create');
Route::post('/tracks', 'TracksController@store');
Route::post('/genres', 'GenresController@store');
