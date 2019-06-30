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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin', function () {
//    return view('admin/dashboard');
//});

Auth::routes();

Route::group(['middleware'=>['admin']], function (){
    Route::get('/admin/dashboard', 'Admin\PagesController@dashboard')->name('admin');
    Route::get('admin/user/deactivate', 'Admin\UserController@deactivate')->name('user.deactivate');
    Route::post('admin/user/deactivate', 'Admin\UserController@deactivate');
    Route::get('admin/user/activate', 'Admin\UserController@activate')->name('user.activate');
    Route::post('admin/user/activate', 'Admin\UserController@activate');

    Route::get('admin/dashboard/join', 'Admin\EventController@join')->name('event.join');
    Route::post('admin/dashboard/join', 'Admin\EventController@join');
    Route::get('admin/dashboard/reject', 'Admin\EventController@reject')->name('event.reject');
    Route::post('admin/dashboard/reject', 'Admin\EventController@reject');

    Route::resource('/admin/user', 'Admin\UserController');
    Route::resource('/admin/mitra', 'Admin\MitraController');
    Route::resource('/admin/transaction', 'Admin\TransactionController');
    Route::resource('/admin/utd', 'Admin\UTDController');
    Route::resource('/admin/mobileunit', 'Admin\EventController');
    Route::resource('/admin/voucher', 'Admin\VoucherController');
    Route::resource('/admin/broadcast', 'Admin\BroadcastController');
});

Route::group(['middleware'=>['root']], function (){

});

