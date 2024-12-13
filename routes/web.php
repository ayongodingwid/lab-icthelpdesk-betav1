<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPagesController;

//Landing Pages
Route::get('/',[LandingPagesController::class,'index'])->name('Index');
Route::get('/masuk',[LandingPagesController::class,'login'])->name('Masuk');
Route::get('/cekprogress',[LandingPagesController::class,'chekticket'])->name('Cek');
Route::get('/buattiket',[LandingPagesController::class,'createticket'])->name('Buat');

//Dashboard
Route::get('/home',[DashboardController::class,'index'])->name('Home');
Route::get('/General/ticket',[DashboardController::class,'request'])->name('ticket');
Route::get('/General/workorder',[DashboardController::class,'task'])->name('task');
Route::get('/problem',[DashboardController::class,'problem'])->name('solving');
Route::get('/requestasset',[DashboardController::class,'reqaset'])->name('reqaset');
