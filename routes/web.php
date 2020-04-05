<?php

Route::get('/', 'Controller@getMainPage');
Route::get('/pizza-city', 'Controller@getPizzaCity');
Route::get('/fountain', 'Controller@getFountain');
Route::post('/callback', 'Controller@postAjaxCallback');

