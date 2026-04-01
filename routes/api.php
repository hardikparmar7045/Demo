<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\API\StudentApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return [
        "name" => "Hardik Parmar",
        "channel" => "The Narsingh bhagat"
    ];
});



Route::get('/students', [StudentApiController::class, 'index']);
