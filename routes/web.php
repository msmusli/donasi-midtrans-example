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

Route::get('/', 'DonationController@index');
Route::post('/finish', 'DonationController@finish')->name('donation.finish');

Route::post('/donation/store', 'DonationController@submitDonation')->name('donation.store');
Route::post('/notification/handler', 'DonationController@notificationHandler')->name('notification.handler');
