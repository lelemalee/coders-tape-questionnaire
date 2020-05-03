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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaires/create', 'QuestionnairesController@create')->name('questionnaires.create');
Route::post('/questionnaires', 'QuestionnairesController@store')->name('questionnaires.store');
Route::get('/questionnaires/{questionnaire}', 'QuestionnairesController@show')->name('questionnaires.show');

Route::get('/questionnaires/{questionnaire}/question/create', 'QuestionsController@create')->name('questions.create');
Route::post('/questionnaires/{questionnaire}/question', 'QuestionsController@store')->name('questions.store');
Route::delete('/questionnaires/{questionnaire}/question/{question}', 'QuestionsController@destroy')->name('questions.destroy');

Route::get('/surveys/{questionnaire}-{slug}', 'SurveysController@show')->name('surveys.show');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveysController@store')->name('surveys.store');