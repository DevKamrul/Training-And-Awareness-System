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

Route :: get('/','FrontController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 

// dashboard


// category routes

Route::get('/category/save', 'CategoryController@index');
Route::post('category/save', 'CategoryController@save');
Route::get('/category/manage', 'CategoryController@manage');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::post('/category/edit','CategoryController@update');
Route::get('/category/delete/{id}','CategoryController@delete');

// Traning routes 

Route::get('/training/save', 'trainingController@index');
Route::post('training/save', 'trainingController@save');
Route::get('/training/manage', 'trainingController@manage');

// Course routes 

Route::get('/course/save', 'courseController@index');
Route::post('course/save', 'courseController@save');
Route::get('/course/manage', 'courseController@manage');