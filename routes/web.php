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
    return View::make('welcome');

})->middleware('auth');

Route::prefix('/admin')->middleware('auth')->group(
    function() {
        Route::name('admin.dashboard')->get('/','AdminController@DashboardAdminAction');
    }
);

Route::resource('/party','PartyController');
Route::resource('/collection','GameCollectionController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

