<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/angular-test', function () {
    return view('angular_test');
});
