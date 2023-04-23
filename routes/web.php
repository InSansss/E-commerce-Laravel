<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\postController;

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

Route::get('/', [homeController::class , 'index']);


Route::get('/register', [registerController::class , 'create'])->middleware('guest');
Route::post('/register', [registerController::class, 'store'])->middleware('guest');

Route::get('/login',[loginController::class,'create'])->middleware('guest');
Route::post('/login',[loginController::class , 'store'])->middleware('guest');
Route::post('/logout',[loginController::class, 'logout'])->middleware('auth');

Route::resource('/dashboard',dashboardController::class)->middleware('auth');

Route::get('post/{show:slug}', [postController::class, 'show']);

Route::get('category/{category:slug}',[categoryController::class,'category']);
