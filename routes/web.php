<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\SubController;

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


// headerlinks
Route::get('/',[LinksController::class,'index']);
Route::get('/sermon',[LinksController::class,'sermon']);
Route::get('/gallery', [LinksController::class,'gallery']);
Route::get('/contact',[LinksController::class,'contact'] );
Route::get('/about',[LinksController::class,'about']);
Route::get('/tithe',[LinksController::class,'tithe']);
Route::get('/sermon/{id}',[LinksController::class,'detail']);

// other pages
Route::post('/post',[PostController::class,'aus']);
Route::post('/load',[PostController::class,'store']);
Route::post('/sub',[SubController::class,'store']);

