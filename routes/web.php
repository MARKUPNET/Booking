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


// 管理画面
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/admin/login', function(){
    return view('auth.login');
});
Route::get('/admin/register', function(){
    return view('auth.register');
});


// フロント画面
Route::get('/', function () {
    return view('top');
});
Route::get('/test', function () {
    return view('top');
});
Route::get('/calendar', 'App\Http\Controllers\CalendarController@index');
Route::get('/booking-form', 'App\Http\Controllers\BookingformController@index');
Route::post('/booking-form/confirm', 'App\Http\Controllers\BookingformController@confirm');
Route::post('/booking-form/thanks', 'App\Http\Controllers\BookingformController@thanks');


