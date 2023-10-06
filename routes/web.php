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

// list project
    // index
    Route::resource('/project', ProjectController::class);
    // API json
    Route::get('/api/project', [ProjectController::class, 'data'])->name('project.data');
    // store
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    // update status
    Route::put('/project/status/{id_project}', [ProjectController::class, 'updateStatus'])->name('project.updateStatus');
    // show edit
    Route::get('/project/{id_project}', [ProjectController::class, 'show'])->name('project.show');
    // edit
    Route::put('/project/{id_project}', [ProjectController::class, 'update'])->name('project.update');
    // delete
    Route::delete('/project/{id_project}', [ProjectController::class, 'destroy'])->name('project.delete');

//
Route::resource('/today', TodayController::class);

// Route::resource('/yesterday', YesterdayController::class);


// Route::get('/', function () {
//     return view('welcome');
// });
