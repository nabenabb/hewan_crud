<?php

use App\Http\Controllers\HewanController;
use Illuminate\Support\Facades\Route;


Route::get('/hewan',[HewanController::class,'index'])->name('hewan.index');