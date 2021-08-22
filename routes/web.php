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

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('/faq', 'WebsiteController@faq')->name('faq');
Route::get('/aboutUs', 'WebsiteController@aboutUs')->name('aboutUs');
Route::get('/contact', 'WebsiteController@contact')->name('contact');
Route::get('/list', 'WebsiteController@list')->name('list');
Route::post('/list/search', 'WebsiteController@search')->name('list.search');
Route::get('/details', 'WebsiteController@details')->name('details');
Route::get('/terms', 'WebsiteController@terms')->name('terms');




Route::namespace('Dashboard')->prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('index', 'IndexController@index')->name('dashboard.index');

    // Equipments
    Route::get('equipments', 'EquipmentController@index')->name('equipment.index');
    Route::get('pricing', 'EquipmentController@pricingIndex')->name('pricing.index');

    //contracts
    Route::get('contracts', 'ContractController@index')->name('contracts.index');


    // Ads
    Route::get('ads', 'AdController@index')->name('ads.index');



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
