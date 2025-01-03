<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/list', function () {
    return view('admin.list');
});