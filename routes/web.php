<?php

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

use App\Http\Controllers\TrainingController;
use App\Http\Controllers\CitizenController;

Route::get('/', function () {
    return view('home');
});

Route::resource('trainings', TrainingController::class);
Route::resource('citizens', CitizenController::class);
