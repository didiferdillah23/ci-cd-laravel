<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes-api', function () {
    return response()->json([
        'message' => 'ok'
    ]);
});