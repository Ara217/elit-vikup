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

//pages
Route::get('/brandy', function () {
    return view('main.templates.pages.brandy');
})->name('brandy');
Route::get('/champagne', function () {
    return view('main.templates.pages.champagne');
})->name('champagne');
Route::get('/cigarettes', function () {
    return view('main.templates.pages.cigarettes');
})->name('cigarettes');
Route::get('/cigars', function () {
    return view('main.templates.pages.cigars');
})->name('cigars');
Route::get('/cognac', function () {
    return view('main.templates.pages.cognac');
})->name('cognac');
Route::get('/portWine', function () {
    return view('main.templates.pages.portWine');
})->name('portWine');
Route::get('/rom', function () {
    return view('main.templates.pages.rom');
})->name('rom');
Route::get('/tobacco', function () {
    return view('main.templates.pages.tobacco');
})->name('tobacco');
Route::get('/vodka', function () {
    return view('main.templates.pages.vodka');
})->name('vodka');
Route::get('/whiskey', function () {
    return view('main.templates.pages.whiskey');
})->name('whiskey');
Route::get('/wine', function () {
    return view('main.templates.pages.wine');
})->name('wine');
//pages

Route::get('/', 'MainController@index');
Route::post('/sendEmail', 'MainController@sendEmail');
Route::post('/orderCall', 'MainController@orderCall');
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/call-request', 'HomeController@getCallRequests')->name('call-request');
Route::get('/admin/mail-request', 'HomeController@getMailRequests')->name('mail-request');
Route::post('/logout','Auth\LoginController@logout')->name('logout');
