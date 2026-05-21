<?php

use App\Http\Controllers\HewanController;
use Illuminate\Support\Facades\Route;


Route::get('/hewan',[HewanController::class,'index'])->name('hewan.index');
Route::get('/hewan/create', [HewanController::class,'create'])->name('hewan.create');
Route::post('/hewan', [HewanController::class,'store'])->name('hewan.store');
