<?php



Route::get('/', 'AgendaController@index');

Route::get('grupo/{grupo}', 'AgendaController@index');

Route::resource('agenda', 'AgendaController');





