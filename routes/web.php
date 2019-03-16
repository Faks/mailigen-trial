<?php
/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 * ******************************************
 * Company Name: Solum DeSignum
 * Company Website: http://solum-designum.com
 * Company GitHub: https://github.com/SolumDeSignum
 * *******************************************************
 *
 * PHP Version 7.1
 *
 * @category PHP
 * @package  Routes
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://solum-designum.com
 * Date: 2019.03.14.
 * Time: 20:59
 */

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

Route::get('/', 'NewsletterController@index')->name('home');

//Crate and Store Routes
Route::get('/create', 'NewsletterController@create')->name('create');
Route::post('/store', 'NewsletterController@store')->name('store');
//Edit and Update Routes
Route::get('/edit/{id}', 'NewsletterController@edit')->name('edit');
Route::get('/get/edit/{id}', 'NewsletterController@getEdit')->name('get-edit');
Route::post('/update', 'NewsletterController@update')->name('update');

//Destroy Route
Route::get('/destroy/{id}', 'NewsletterController@destroy')->name('destroy');
