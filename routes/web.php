<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/', [TestController::class, 'index']);
Route::get('/page/{id}', [TestController::class, 'page']);