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
    return view('welcome');
});

Route::get('football','FootballController@index');

Route::get('football/add', 'FootballController@add');
Route::post('football/add', 'FootballController@create');

Route::get('football/edit', 'FootballController@edit');
Route::post('football/edit', 'FootballController@update');

Route::get('football/del', 'FootballController@del');
Route::post('football/del', 'FootballController@remove');

Route::get('football_team', 'Football_teamController@index');

Route::get('football_team/find', 'Football_teamController@find');
Route::post('football_team/find', 'Football_teamController@search');

Route::get('football_team/add', 'Football_teamController@add');
Route::post('football_team/add', 'Football_teamController@create');

Route::get('football_team/edit', 'Football_teamController@edit');
Route::post('football_team/edit', 'Football_teamController@update');

Route::get('football_team/del', 'Football_teamController@delete');
Route::post('football_team/del', 'Football_teamController@remove');

Route::get('teams_player', 'Teams_playerController@index');

Route::get('teams_player/add', 'Teams_playerController@add');
Route::post('teams_player/add', 'Teams_playerController@create');

Route::get('teams_player/edit', 'Teams_playerController@edit');
Route::post('teams_player/edit', 'Teams_playerController@update');

Route::get('teams_player/del', 'Teams_playerController@delete');
Route::post('teams_player/del', 'Teams_playerController@remove');

Route::get('menu', 'MenuController@menu');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
