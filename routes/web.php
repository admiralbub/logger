<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/log', [MainController::class, 'log'])->name('log'); 
Route::get('/log/{type}', [MainController::class, 'logTo'])->name('logType');  //3 types: file, email, or db
Route::get('/log-to-all', [MainController::class, 'logToAll'])->name('logToAll');