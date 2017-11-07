<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ItemAjaxController@manageItemAjax');

Route::resource('item-ajax', 'ItemAjaxController');

Route::post('/item-ajax/search',['as'=>'item-ajax.search', 'uses'=>'ItemAjaxController@search']);