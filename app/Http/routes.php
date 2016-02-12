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


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

//Route::model('club', 'Club');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::resource('users','ClubController@users');
Route::resource('clubs','ClubController');
//Route::get('clubs/{id}', 'ClubController@show');
//Route::get('clubs/create', 'ClubController@create');
Route::post('clubs/update/{id}', 'ClubController@update');

Route::resource('players','PlayerController');
Route::post('players/store', 'PlayerController@store');

Route::resource('articles','ArticleController');
Route::post('articles/store', 'ArticleController@store');

Route::resource('teams','TeamController');
Route::post('teams/store', 'TeamController@store');

Route::resource('matches','MatchController');
Route::post('matches/store', 'MatchController@store');
Route::get('matches/teams', 'MatchController@teams');


Route::resource('scorecards','ScorecardController');
Route::post('scorecards/store', 'ScorecardController@store');
Route::get('scorecards/create/{matchid}', 'ScorecardController@create');

Route::resource('playerscores','PlayerscoreController');
Route::post('playerscores/store', 'PlayerscoreController@store');