<?php

use CodeProject\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('client', [ClientController::class, 'index']);
Route::post('client', [ClientController::class, 'store']);
Route::get('client/{id}', [ClientController::class, 'show']);
Route::delete('client/{id}', [ClientController::class, 'destroy']);
