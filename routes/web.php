<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('/welcome');
});

Route::get('/users','UserController@index');

Route::get('/plants/search','PlantController@search');
Route::get('/pests/search','PlagueController@search');
Route::get('/diseases/search','DiseaseController@search');

Route::get('/plants','PlantController@index');

Route::get('/plants/{id}/edit','PlantController@edit');

Route::get('/plants/create','PlantController@create');

Route::post('/plants','PlantController@store');

Route::put('/plants/{id}','PlantController@update');

Route::delete('/plants/{id}','PlantController@destroy');


Route::get('/diseases','DiseaseController@index');

Route::get('/diseases/create','DiseaseController@create');

Route::post('/diseases','DiseaseController@store');

Route::get('/diseases/{id}/edit','DiseaseController@edit');

Route::put('/diseases/{id}','DiseaseController@update');

Route::delete('/diseases/{id}','DiseaseController@destroy');

Route::get('/pests','PlagueController@index');

Route::get('/pests/create','PlagueController@create');

Route::post('/pests','PlagueController@store');

Route::get('/pests/{id}/edit','PlagueController@edit');

Route::put('/pests/{id}','PlagueController@update');

Route::delete('/pests/{id}','PlagueController@destroy');



Route::get('/users','UserController@index');

Route::get('/users/create','UserController@create');

Route::post('/users','UserController@store');

Route::get('/users/{id}/edit','UserController@edit');

Route::put('/users/{id}','UserController@update');

Route::delete('/users/{id}','UserController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index');
