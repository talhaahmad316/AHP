<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CarsDetailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('registerd/users',[AuthController::class,'index'])->name('registerd.users');
Route::post('register/users',[AuthController::class,'register'])->name('register.users');

Route::get('carsdetail/index',[CarsDetailController::class,'index'])->name('carsdetail.index');
Route::post('carsdetail/store',[CarsDetailController::class,'store'])->name('carsdetail.store');