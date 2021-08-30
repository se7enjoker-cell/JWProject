<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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



Route::get('about',[HomeController::class,'getUpdate']);

Route::post('update',[HomeController::class,'update'])->name('update');

Route::get('login',function(){
    return view('Admin.login');
});

Route::get('dasboard',function(){
    return view('Admin.dasboard');
});




