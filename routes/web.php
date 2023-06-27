<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BakeryController;


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

Route::get('/bakery',[BakeryController::class,'index']);
Route::get('/bakery/create',[BakeryController::class,'create']);
Route::post('/bakery/store',[BakeryController::class,'store']);
Route::get('/bakery/{id}/edit',[BakeryController::class,'edit']);
Route::put('/bakery/{id}/',[BakeryController::class,'update']);
Route::delete('/bakery/{id}/',[BakeryController::class,'destroy']);
Route::group(['middleware' => 'guest'],function(){
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('register',[AuthController::class,'registerPost'])->name('register');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/welcome',[HomeController::class,'welcome']);
    Route::delete('logout',[AuthController::class, 'logout'])->name('logout');
});