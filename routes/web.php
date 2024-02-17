<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LearningController;

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


Route::get('/', [HomeAboutController::class, 'home']);
Route::get('/about', [HomeAboutController::class, 'about']);

// Contact Controller 
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact-view', [ContactController::class, 'view']);

// Learning Controller
Route::get('/learning', [LearningController::class, 'index']);
Route::post('/learning', [LearningController::class, 'store']);
Route::get('/learning-view', [LearningController::class, 'view']);
