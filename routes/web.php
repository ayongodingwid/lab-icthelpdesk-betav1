<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPagesController;

/* Route::get('/', function () {
    return view('welcome');
}); */


//Landing Pages
Route::get('/',[LandingPagesController::class,'index'])->name('Index');

//Dashboard
Route::get('/masuk',[DashboardController::class,'index'])->name('Masuk');
