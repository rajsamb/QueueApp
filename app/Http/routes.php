<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queue', 'CustomerQueueController@index');
Route::post('/queue/addCitizenToQueue', 'CustomerQueueController@addCitizenToQueue');
Route::post('/queue/addOrganisationToQueue', 'CustomerQueueController@addOrganisationToQueue');
Route::post('/queue/addAnonymousToQueue', 'CustomerQueueController@addAnonymousToQueue');
