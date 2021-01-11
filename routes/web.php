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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
    // Localization
    Route::get('lang/{lang}', 'LocalizationController@switchLanguage')->name('lang.switch');
    // Login
    Route::get('login', 'AuthController@showLoginForm')->name('loginForm');
    Route::post('login', 'SmsController@send')->name('login');
    // Verify
    Route::get('verify', 'AuthController@showVerifyForm')->name('verifyForm');
    Route::post('verify', 'SmsController@verify')->name('verify');
    // Register
    Route::get('register/company', 'AuthController@showRegisterCompanyForm')->name('registerCompanyForm');
    Route::get('register/citizen', 'AuthController@showRegisterCitizenForm')->name('registerCitizenForm');
    Route::post('register/company', 'AuthController@registerCompany')->name('registerCompany');
    Route::post('register/citizen', 'AuthController@registerCitizen')->name('registerCitizen');
    // Pages
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('contacts', 'ContactController@index')->name('contacts');
    Route::get('legislature', 'LegislatureController@index')->name('legislature');
    Route::get('doc-types', 'DocTypeController@index')->name('docTypes');
    Route::get('applications', 'ApplicationController@index')->name('applications');
    Route::get('applications/create', 'ApplicationController@create')->name('applications.create');
    Route::post('applications', 'ApplicationController@store')->name('applications.store');
});

