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
    return view('cpoa.demo');
});
Route::get('import','ChannelPartnerOperateArea@index');
Route::post('/area/store','ChannelPartnerOperateArea@store');
Route::get('/dropdown','ChannelPartnerOperateArea@dropDown');
Route::post('/dynamic_dependent/fetch','ChannelPartnerOperateArea@fetch')->name('dynamicdependent.fetch');
