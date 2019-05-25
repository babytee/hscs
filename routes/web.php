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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('patient','PatientController');
Route::resource('healthinfo','HealthinfoController');
Route::get('addhealthinfo/{id}','HealthinfoController@addinfo')->name('addhealthinfo');
Route::get('updatehealthinfo/{id}','HealthinfoController@updateinfo')->name('updatehealthinfo');

Route::resource('doctor','DoctorController');
Route::resource('report','ReportController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
