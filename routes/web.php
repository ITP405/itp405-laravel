<?php

// Route::get('/', function () {
//     return view('genres');
// });

Route::get('/genres', 'GenresController@index');
Route::get('/tracks', 'TracksController@index');
//index = function name
