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

Route::get('/', function () {
    return view('auth.login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::get('/usercontrol', 'HomeController@usercontrol')->name('usercontrol');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('/updateuser/{id}', 'HomeController@updateuser')->name('updateuser');
Route::get('/getadduser', 'HomeController@getadduser')->name('getadduser');
Route::post('/adduser', 'HomeController@adduser')->name('adduser');
Route::post('/deleteuser/{id}', 'HomeController@deleteuser')->name('deleteuser');
Route::get('/singleuser/{id}', 'HomeController@singleuser')->name('singleuser');
Route::get('/form_invoice', 'HomeController@form_invoice')->name('form_invoice');
Route::post('/send_invoice', 'HomeController@send_invoice')->name('send_invoice');
Route::get('/sent_invoices', 'HomeController@sent_invoices')->name('sent_invoices');
//Route::get('/usercontrol', 'Controller@usercontrol')->name('usercontrol'); not secure