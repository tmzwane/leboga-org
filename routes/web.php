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

Route::get('/get-me', 'TelegramController@getMe');

Route::get('/set-hook', 'TelegramController@setWebHook');

Route::get('/remove-hook', 'TelegramController@removeWebHook');

Route::post(env('TELEGRAM_BOT_TOKEN') . '/webhook', 'TelegramController@handleRequest');

Route::post('/queue', 'TelegramController@clearQueue');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bot-config', 'BotConfigController@index')->name('botConfig');

Route::post('/bot-config/set-id', 'BotConfigController@setUserID')->name('botConfig');

Route::post('/bot-config/save-config', 'BotConfigController@saveBotConfig')->name('botConfig');



