<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewmodelController;

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

// Route::get('/', function () {
//     return view('welcome');

// });
Route::get('student/index',[NewmodelController::class,'index']);
Route::get('student/create',[NewmodelController::class,'create']);
Route::get('student/edit/{id}',[NewmodelController::class,'edit']);
Route::get('student/view/{id}',[NewmodelController::class,'view']);
Route::post('student/store',[NewmodelController::class,'store']);
Route::post('student/store_2',[NewmodelController::class,'store_2']);