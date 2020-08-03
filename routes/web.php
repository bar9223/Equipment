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

Route::get('/equipment/{id}', 'EquipmentController@getEquipment');
Route::get('/buy-box/{id}', 'BuyController@buyBox');
Route::get('/buy-reward/{id}', 'BuyController@buyReward');
Route::get('/buy-rune/{id}', 'BuyController@buyRune');

Route::resource('boxes', 'BoxesController');
Route::resource('runes', 'RunesController');
Route::resource('rewards', 'RewardsController');
