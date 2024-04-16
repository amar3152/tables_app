<?php

use App\Http\Controllers\MultiplicationTableController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MultiplicationTableController::class, 'index']);
Route::post('/', [MultiplicationTableController::class, 'generateTable'])->name('generate-table');

