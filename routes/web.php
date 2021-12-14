<?php

use App\Http\Controllers\DemoController;
use App\Models\JeuModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('jeu', JeuController::class);

Route::get('jeu/create', [JeuController::class, 'create'])->middleware('auth');

Route::get('/appel',[DemoController::class, 'appel']);

Route::get('/user/adresse',[UserController::class,'coordonneesGPS']);

require __DIR__.'/auth.php';


