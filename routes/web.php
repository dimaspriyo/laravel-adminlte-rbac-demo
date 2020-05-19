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

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/login', 'HomeController@login')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@home')->name('home');

Route::group(['middleware' => ['auth','user.management'], 'prefix' => 'usermanagement'], function () {

    Route::get('/create', 'UserManagementController@create')->name('user.create');
    Route::get('/assign', 'UserManagementController@assign')->name('user.assign');
    Route::get('/list', 'UserManagementController@list')->name('user.list');

});

Route::group(['middleware' => ['auth','report'], 'prefix' => 'report'], function () {

    Route::get('/user', 'ReportController@create')->name('report.user');
    Route::get('/inventory', 'ReportController@list')->name('report.inventory');

});

Route::group(['middleware' => ['auth','inventory'], 'prefix' => 'inventory'], function () {

    Route::get('/add', 'InventoryController@create')->name('inventory.add');
    Route::get('/list', 'InventoryController@list')->name('inventory.list');

});

