<?php

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/users', [HomeController::class, 'users'])->name('users');

Route::controller(HomeController::class)->group(function(){
    Route::get('/admin/home', 'index')->middleware('auth')->name('home');

    Route::get('/users/home', 'users')->name('users')->middleware('auth');

    Route::post('/logout', 'logout');
});


Route::controller(DivisionController::class)->group(function(){

    Route::get('/register', 'register');

    });


Route::controller(DocumentController::class)->group(function(){

    Route::post('/add/document', 'store')->name('add document');

    Route::get('/users/home', 'index')->name('index')->middleware('auth');


});

Auth::routes();
