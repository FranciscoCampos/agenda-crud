<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('grupo/{grupo}', 'AgendaController@index');

Route::resource('agenda', 'AgendaController');





