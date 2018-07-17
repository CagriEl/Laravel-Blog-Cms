<?php

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contuributor')->group(function (){
Route::get('/','ManageController@index');
Route::get('dashboard', 'ManageController@dashboard')->name('manage.dashboard');
Route::resource('/users', 'UserController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
