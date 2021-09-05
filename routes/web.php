<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;

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





Route::get('login',function(){
    return view('Admin.login');
})->name('login');




Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('about',[HomeController::class,'getUpdate']);
    
    Route::post('update',[HomeController::class,'update'])->name('update');

    Route::get('dashboard',function(){
        return view('Admin.dasboard');
    })->name('dashboard');

    Route::post('authenticate',[LoginController::class,'authenticate'])->name('authenticate');


});


