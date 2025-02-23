<?php

use CodeProject\Http\Controllers\ClientController;
use CodeProject\Http\Controllers\ProjectController;
use CodeProject\Http\Controllers\ProjectNoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('client', [ClientController::class, 'index']);
Route::post('client', [ClientController::class, 'store']);
Route::get('client/{id}', [ClientController::class, 'show']);
Route::delete('client/{id}', [ClientController::class, 'destroy']);

Route::get('project/{id}/note', [ProjectNoteController::class, 'index']);
Route::post('project/{id}/note', [ProjectNoteController::class, 'store']);
Route::get('project/{id}/note/{noteId}', [ProjectNoteController::class, 'show']);
Route::put('project/{id}/note/{noteId}', [ProjectNoteController::class, 'update']);
Route::delete('project/{id}/note/{noteId}', [ProjectNoteController::class, 'destroy']);

Route::get('project', [ProjectController::class, 'index']);
Route::post('project', [ProjectController::class, 'store']);
Route::get('project/{id}', [ProjectController::class, 'show']);
Route::delete('project/{id}', [ProjectController::class, 'destroy']);
