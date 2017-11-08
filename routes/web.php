<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ItemAjaxController@manageItemAjax');

// Route::resource('item-ajax', 'ItemAjaxController');


Route::get('item-ajax',['as'=>'item-ajax.index','uses'=>'ItemAjaxController@index']);  //index
Route::post('item-ajax',['as'=>'item-ajax.store','uses'=>'ItemAjaxController@store']);  // store 
Route::get('item-ajax/create',['as'=>'item-ajax.create','uses'=>'ItemAjaxController@create']); //create 

Route::get('item-ajax/{item-ajax}/edit',['as'=>'item-ajax.edit','uses'=>'ItemAjaxController@edit']);

Route::put('item-ajax/{item-ajax}',['as'=>'item-ajax.update','uses'=>'ItemAjaxController@update']);
Route::delete('item-ajax/{item-ajax}',['as'=>'item-ajax.destory','uses'=>'ItemAjaxController@destory']);

Route::post('/item-ajax/search',['as'=>'item-ajax.search', 'uses'=>'ItemAjaxController@search']);  // search
