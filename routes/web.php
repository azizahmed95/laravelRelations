<?php

Route::get('/', 'MainController@index');

Route::get('/insertaddress/{id}','MainController@insertAddr');
Route::get('/updateaddress/{id}','MainController@updateAddr');
Route::get('/deleteaddress/{id}','MainController@deleteAddr');
