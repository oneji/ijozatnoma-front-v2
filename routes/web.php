<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('login', 'AuthController@showLoginForm');
Route::post('login', 'SmsController@send')->name('login');
Route::get('verify', 'AuthController@showVerifyForm');
Route::post('verify', 'SmsController@verify')->name('verify');
Route::get('register', 'AuthController@showRegisterForm');

Route::get('/', 'HomeController@index')->name('home');
Route::get('contacts', 'ContactController@index')->name('contacts');
Route::get('legislature', 'LegislatureController@index')->name('legislature');
Route::get('doc-types', 'DocTypeController@index')->name('docTypes');
Route::get('applications', 'ApplicationController@index')->name('applications');
Route::get('applications/create', 'ApplicationController@create')->name('applications.create');
Route::post('applications', 'ApplicationController@store')->name('applications.store');
