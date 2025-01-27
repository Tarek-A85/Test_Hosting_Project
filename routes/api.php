<?php

use App\Http\Controllers\NameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('test', [NameController::class, 'index'])->name('index');