<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queue', 'CustomerQueueController@index');
Route::post('/queue/addCitizenToQueue', 'CustomerQueueController@addCitizenToQueue');
Route::post('/queue/addOrganisationToQueue', 'CustomerQueueController@addOrganisationToQueue');
Route::post('/queue/addAnonymousToQueue', 'CustomerQueueController@addAnonymousToQueue');
