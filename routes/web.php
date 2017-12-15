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

Route::get('/', 'UserController@index')->name('home');

Route::get('/amoclient/ready', function () {
    return view('login');
})->name('login');

Route::get('/student', 'StudentController@index')->name('studentlist');

Route::get('/student/{id}', 'StudentController@show')->name('student');

Route::get('/statistics', function () {
    return view('statistics');
})->name('statistics');

Route::get('/module', 'ModuleController@index')->name('modulelist');


Route::get('/module/{id}', 'ModuleController@show')->name('module');

Route::get('/addmodule', 'ModuleController@add')->name('moduleform');

Route::post('/api/module', 'ModuleController@store')->name('addmodule');

Route::post('/api/cohort', 'CohortController@store')->name('addcohort');

Route::get('/api/cohort', 'CohortController@index')->name('cohort');
