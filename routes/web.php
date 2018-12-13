<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// werehouse
Route::get('/werehouse', 'WerehouseController@index')->name('werehouseindex');
Route::post('/werehouse', 'WerehouseController@werehouseaction')->name('werehouse');
Route::get('/werehouse_update/{werehouse_id}', 'WerehouseController@show')->name('showwerehouse');
Route::post('/{werehouse_id}', 'WerehouseController@updatewerehouse')->name('updatewerehouse');
Route::delete('/{werehouse_id}', 'WerehouseController@destroy')->name('deletewerehouse');

// items
Route::get('/item', 'ItemController@index')->name('itemsindex');
Route::post('/item', 'ItemController@saveitem')->name('saveitem');
