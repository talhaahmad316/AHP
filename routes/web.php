<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsdetailsController;
use App\Http\Controllers\AuthController;

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


Route::group(["prefix" => "/"], function () {
    Route::group(["middleware" => "guest"], function () {
        Route::get('user/registerpage',[AuthController::class,'registerpage'])->name('user.registerpage');
        Route::post('user/register',[AuthController::class,'register'])->name('user.register');
        Route::get('user/loginpage',[AuthController::class,'loginpage'])->name('user.loginpage');
        Route::post('user/login',[AuthController::class,'login'])->name('user.login');        
    });
    Route::group(["middleware" => "auth"], function () {
        Route::get('/',[AuthController::class,'dashboard'])->name('dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('carsdetail/create',[CarsdetailsController::class,'create'])->name('carsdetail.create');
        Route::post('carsdetail/store',[CarsdetailsController::class,'store'])->name('carsdetail.store');
        Route::get('carsdetail/index',[CarsdetailsController::class,'index'])->name('carsdetail.index');
        Route::get('carsdetail/edit/{id}',[CarsdetailsController::class,'edit'])->name('carsdetail.edit');
        Route::put('carsdetail/update/{id}',[CarsdetailsController::class,'update'])->name('carsdetail.update');
        Route::delete('carsdetail/destroy/{id}',[CarsdetailsController::class,'destroy'])->name('carsdetail.destroy');
    });
});


