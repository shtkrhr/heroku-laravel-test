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
Route::get('/env', function () {
    return [
        'App::environment(\'production\')' => \App::environment('production'),
        'APP_NAME' => env('APP_NAME'),
        'APP_ENV' => env('APP_ENV'),
        'APP_KEY' => env('APP_KEY'),
        'APP_DEBUG' => env('APP_DEBUG'),
        'APP_URL' => env('APP_URL'),
        'LOG_CHANNEL' => env('LOG_CHANNEL'),
        'DB_CONNECTION' => env('DB_CONNECTION'),
        'DB_HOST' => env('DB_HOST'),
        'DB_PORT' => env('DB_PORT'),
        'DB_DATABASE' => env('DB_DATABASE'),
        'DB_USERNAME' => env('DB_USERNAME'),
        'DB_PASSWORD' => env('DB_PASSWORD'),
        'BROADCAST_DRIVER' => env('BROADCAST_DRIVER'),
        'CACHE_DRIVER' => env('CACHE_DRIVER'),
        'QUEUE_CONNECTION' => env('QUEUE_CONNECTION'),
        'SESSION_DRIVER' => env('SESSION_DRIVER'),
        'SESSION_LIFETIME' => env('SESSION_LIFETIME'),
        'REDIS_HOST' => env('REDIS_HOST'),
        'REDIS_PASSWORD' => env('REDIS_PASSWORD'),
        'REDIS_PORT' => env('REDIS_PORT'),
        'MAIL_DRIVER' => env('MAIL_DRIVER'),
        'MAIL_HOST' => env('MAIL_HOST'),
        'MAIL_PORT' => env('MAIL_PORT'),
        'MAIL_USERNAME' => env('MAIL_USERNAME'),
        'MAIL_PASSWORD' => env('MAIL_PASSWORD'),
        'MAIL_ENCRYPTION' => env('MAIL_ENCRYPTION'),
        'PUSHER_APP_ID' => env('PUSHER_APP_ID'),
        'PUSHER_APP_KEY' => env('PUSHER_APP_KEY'),
        'PUSHER_APP_SECRET' => env('PUSHER_APP_SECRET'),
        'PUSHER_APP_CLUSTER' => env('PUSHER_APP_CLUSTER'),
        'MIX_PUSHER_APP_KEY' => env('MIX_PUSHER_APP_KEY'),
        'MIX_PUSHER_APP_CLUSTER' => env('MIX_PUSHER_APP_CLUSTER'),
    ];
});
