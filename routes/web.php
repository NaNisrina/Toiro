<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TodayController;
use App\Http\Controllers\YesterdayController;
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

// home
Route::get('/', [HomeController::class, 'index'])->name('home');
// list
Route::resource('/project', ProjectController::class);

Route::resource('/today', TodayController::class);

// Route::resource('/yesterday', YesterdayController::class);


// Route::get('/', function () {
//     return view('welcome');
// });
