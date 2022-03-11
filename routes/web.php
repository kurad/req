<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::get('/admin',[App\Http\Controllers\AdminController::class,'requests'])->name('admin')->middleware('admin');
Route::get('/requests',[App\Http\Controllers\AdminController::class,'requests'])->name('requests')->middleware('admin');
Route::get('/finance',[App\Http\Controllers\FinanceController::class, 'index'])->name('finance')->middleware('finance');


//User routes
Route::get('/user',[App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('user');
Route::get('/request',[App\Http\Controllers\UserController::class, 'request_form'])->name('request')->middleware('user');
Route::post('/create_request',[App\Http\Controllers\UserController::class, 'createRequest'])->name('createRequest')->middleware('user');
Route::get('/request_item',[App\Http\Controllers\UserController::class, 'item_form'])->name('request_item')->middleware('user');
Route::get('/all_requests',[App\Http\Controllers\UserController::class, 'all_requests'])->name('all_requests')->middleware('user');
Route::post('/save_request',[App\Http\Controllers\UserController::class, 'create'])->name('save_request')->middleware('user');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
