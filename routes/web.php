<?php

Route::get('/', ['as' => 'get::main', 'uses' => 'Controller@getMainPage']);
Route::get('/pizza-city', ['as' => 'get::pizza-city', 'uses' => 'Controller@getPizzaCity']);
Route::get('/pizza-city-2', ['as' => 'get::pizza-city-2', 'uses' => 'Controller@getPizzaCity2']);
Route::get('/fountain', ['as' => 'get::fountain', 'uses' => 'Controller@getFountain']);
Route::get('/knjaga-vtiha', ['as' => 'get::knjaga-vtiha', 'uses' => 'Controller@getKnjagaVtiha']);
Route::get('/gallery', ['as' => 'get::gallery', 'uses' => 'Controller@getGallery']);
Route::get('/delivery', ['as' => 'get::delivery', 'uses' => 'Controller@getDelivery']);
Route::get('/about', ['as' => 'get::about', 'uses' => 'Controller@getAbout']);


Route::post('/callback', ['as' => 'post::callback', 'uses' => 'Controller@postAjaxCallback']);
