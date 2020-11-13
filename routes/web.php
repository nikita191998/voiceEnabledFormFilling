<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/formsubmit',[App\Http\Controllers\FormController::class, 'handle'])->name('form');
Route::get('/googlelogin',[App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('login.google');
Route::get('/addGoogle',[App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback'])->name('add.google');
Route::get('/form/{type}',[App\Http\Controllers\FormController::class, 'getForm'])->name('get.form');
Route::get('/startbot/{form}',[App\Http\Controllers\BotController::class,'handle'])->name('startbot');