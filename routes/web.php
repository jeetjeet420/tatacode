<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUser;
use App\Http\Controllers\FormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginUser::class,'callback']);



Route::post('/form',[FormController::class,'submitdata'])->name('submit_form');



Route::view('/noacess', 'noacess')->name('noacess');


Route::middleware(['protectsession'])->group(function () {
    Route::view('/home', 'home');
    Route::get('/form',[FormController::class,'getdata']);
});