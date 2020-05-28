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

Route::post('/live',[
    'uses' => 'CodeController@verify', 
    'as' => 'code.verify.route'
]);
Route::get('/live/{code}',[
    'uses' => 'CodeController@show', 
    'as' => 'live.route'
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
