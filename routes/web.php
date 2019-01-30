<?php

// Route::get('/', function () {
//     return view('genres');
// });

Route::get('/', 'GenresController@index');
Route::get('/tracks', 'TracksController@index');
//index = function name
