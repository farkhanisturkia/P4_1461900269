<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


Route::get('/',[BukuController::class,'index']);
Route::get('/print0269', [BukuController::class,'export']);
