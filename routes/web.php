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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Route::prefix('superadmin')->group(function() {
    // 
});

Route::prefix('school')->group(function() {
    // 
});

Route::prefix('teacher')->group(function() {
    // 
});

Route::prefix('staff')->group(function() {
    // 
});

Route::prefix('parent')->group(function() {
    // 
});

Route::prefix('student')->group(function() {
    // 
});