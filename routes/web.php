<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssignmentController;
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
    return view('welcome');
});

Route::group(['prefix' => 'auth', 'controller' => AuthController::class], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/login', 'get_login')->name('login');
        Route::post('/', 'auth');
    });

    Route::get('/logout', 'get_logout')->middleware('auth');
});

Route::group(['prefix' => 'home', 'middleware' => 'auth', 'controller' => HomeController::class], function() {
    Route::get('/', 'index');
});

Route::group(['prefix' => 'dashboard', 'controller' => DashboardController::class], function() {

});

Route::get('/home',[AssignmentController::class, 'index']);
