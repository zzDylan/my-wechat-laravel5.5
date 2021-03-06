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
Route::any('/wechat', 'WeChatController@serve');
Route::any('/test', 'WeChatController@test');
Route::any('/add_button', 'WeChatController@addButton');
Route::view('/red_packet', 'redPacket');
