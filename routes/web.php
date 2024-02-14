<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Job\JobCategoryController;
use App\Http\Controllers\Admin\Job\JobTagsController;
use App\Http\Controllers\Admin\Job\JobTypeController;
use App\Http\Controllers\Admin\Location\CityController;
use App\Http\Controllers\Admin\Location\CountryController;
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
    Route::resource('/countries', CountryController::class);
    Route::resource('/cities', CityController::class);
    Route::resource('/job-categories', JobCategoryController::class);
    Route::resource('/job-tags', JobTagsController::class);
    Route::resource('/job-types', JobTypeController::class);
});

