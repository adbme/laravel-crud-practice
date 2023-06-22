<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newEventController;
use App\Http\Controllers\uploadController;

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

Route::resource("/newEvent", newEventController::class, [uploadController::class, 'index']);




Route::view('upload', 'upload');
Route::post('upload', [uploadController::class, 'index']);
