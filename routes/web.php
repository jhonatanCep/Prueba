<?php


Route::get('/', 'PagesController@inicio')->name('inicio');

Route::post('/', 'PagesController@crear')->name('Book.crear');

Route::get('/Edit/{id}', 'PagesController@editar')->name('Books.edit');

Route::put('/Edit/{id}', 'PagesController@update')->name('Books.update');

route::delete('/eliminar/{id}','PagesController@eliminar')->name('Books.eliminar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
