<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Permission\PermissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|
|--------------------------------------------------------------------------
| All Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin.index');
    Route::resource('/permissions',PermissionController::class);
});

