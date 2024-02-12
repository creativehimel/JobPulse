<?php

use App\Http\Controllers\Admin\DashboardController;
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
});

