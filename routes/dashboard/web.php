<?php

/*
|--------------------------------------------------------------------------
| Dashhboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
    Route::resource('/','DashboardController');

Route::resource('posts','PostController');
Route::resource('categories','CategoryController');

});