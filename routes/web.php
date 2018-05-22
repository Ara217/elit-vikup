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

Route::get('/aboutUs', function () {
    return view('main.templates.about-us');
})->name('about-us');
Route::get('/contactUs', function () {
    return view('main.templates.contact-us');
})->name('contact-us');
Route::get('/orderCall', function () {
    return view('main.templates.order-call');
})->name('order-call');
Route::get('/sendEmail', function () {
    return view('main.templates.send-email');
})->name('send-email');


Auth::routes();

Route::get('/', 'MainController@index');
Route::post('/sendEmail', 'MainController@sendEmail');
Route::post('/orderCall', 'MainController@orderCall');
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/call-request', 'HomeController@getCallRequests')->name('call-request');
Route::get('/admin/mail-request', 'HomeController@getMailRequests')->name('mail-request');
