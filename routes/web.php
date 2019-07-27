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

use Illuminate\Support\Facades\Auth;
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

    Route::get('admin/dashboard/join', 'Admin\EventController@join')->name('event.join');
    Route::post('admin/dashboard/join', 'Admin\EventController@join');
    Route::get('admin/dashboard/reject', 'Admin\EventController@reject')->name('event.reject');
    Route::post('admin/dashboard/reject', 'Admin\EventController@reject');
    Route::get('generate-pdf/{id}','Admin\TransactionController@generatePDF')->name('pdf');

    Route::resource('/admin/user', 'Admin\UserController');
    Route::resource('/admin/transaction', 'Admin\TransactionController');
    Route::resource('/admin/mobileunit', 'Admin\EventController');

});

Route::group(['middleware'=>['root']], function (){
    Route::get('/root/dashboard', 'Root\PageController@dashboard')->name('root');

    Route::get('root/user/deactivate', 'Root\UsersController@deactivate')->name('user.deactivate');
    Route::post('root/user/deactivate', 'Root\UsersController@deactivate');
    Route::get('root/user/activate', 'Root\UsersController@activate')->name('user.activate');
    Route::post('root/user/activate', 'Root\UsersController@activate');

    Route::get('root/blog/deactivate', 'Root\BlogController@deactivate')->name('blog.deactivate');
    Route::post('root/blog/deactivate', 'Root\BlogController@deactivate');
    Route::get('root/blog/activate', 'Root\BlogController@activate')->name('blog.activate');
    Route::post('root/blog/activate', 'Root\BlogController@activate');

    Route::resource('/root/users', 'Root\UsersController');
    Route::resource('/root/mitra', 'Root\MitraController');
    Route::resource('/root/voucher', 'Root\VoucherController');
    Route::resource('/root/broadcast', 'Root\BroadcastController');
    Route::resource('/root/utd', 'Root\UTDController');
    Route::resource('/root/transactions', 'Root\TransactionsController');
    Route::resource('/root/mobileunits', 'Root\EventsController');
    Route::resource('/root/blog', 'Root\BlogController');
});

