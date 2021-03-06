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
    return view('index')->with(['menu' => 'main']);
});

Route::get('/login', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/accet/survey', 'surveyController@startSurvey')->name('home');
Route::post('/accet/survey', 'surveyController@storeSurvey')->name('home');

Route::post('/contactform/receive', 'surveyController@saveContact');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/accet/survey/result', 'surveyController@surveyResult');
	Route::get('/accet/survey/feedback', 'surveyController@getFeedback');
	
});


