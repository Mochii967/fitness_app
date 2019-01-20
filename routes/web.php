<?php

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

Route::get('/', 'PagesController@index');
Route::get('/fitness_tools', 'PagesController@fitness');
Route::get('/fitness_tools/bmi', 'PagesController@bmi');
Route::get('/fitness_tools/calorie', 'PagesController@calorie');
Route::post('/fitness_tools/bmi', 'PagesController@calculatebmi');
Route::post('/fitness_tools/calorie', 'PagesController@calculatecalorie');

Route::resource('articles', 'ArticlesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
