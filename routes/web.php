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

use Illuminate\Support\Facades\Artisan;

Route::get('/', 'NewsletterController@index')->name('home');

Route::get('/create', 'NewsletterController@create');
Route::post('/store', 'NewsletterController@store');
Route::get('/destroy/{id}', 'NewsletterController@destroy')->name('destroy');


//Artisan::call('view:clear');