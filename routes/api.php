<?php

use CodeProject\Http\Controllers\ClientController;
use CodeProject\Http\Controllers\ProjectController;
use CodeProject\Http\Controllers\ProjectNoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => 'auth:api'], function () {

    Route::resource('client', ClientController::class, ['except' => ['create', 'edit']]);
    Route::resource('project', ProjectController::class, ['except' => ['create', 'edit']]);


    Route::group(['prefix' => 'project'], function () {
        Route::get('{id}/note', [ProjectNoteController::class, 'index']);
        Route::post('{id}/note', [ProjectNoteController::class, 'store']);
        Route::get('{id}/note/{noteId}', [ProjectNoteController::class, 'show']);
        Route::put('{id}/note/{noteId}', [ProjectNoteController::class, 'update']);
        Route::delete('{id}/note/{noteId}', [ProjectNoteController::class, 'destroy']);
    });
});
