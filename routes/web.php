<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Job\JobTagsController;
use App\Http\Controllers\Admin\Job\JobTypeController;
use App\Http\Controllers\Admin\Job\JobShiftController;
use App\Http\Controllers\Admin\Job\JobSkillController;
use App\Http\Controllers\Admin\Location\CityController;
use App\Http\Controllers\Admin\Job\JobCategoryController;
use App\Http\Controllers\Admin\Location\CountryController;
use App\Http\Controllers\Admin\Job\JobExperienceController;
use App\Http\Controllers\Admin\Permission\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::prefix('admin')->group(function () {
    Route::match(['get','post'],'/login',[AdminController::class, 'login'])->name('admin.login');
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.index');
        Route::resource('/permissions',PermissionController::class);
        Route::resource('/countries', CountryController::class);
        Route::resource('/cities', CityController::class);
        Route::resource('/job-categories', JobCategoryController::class);
        Route::resource('/job-tags', JobTagsController::class);
        Route::resource('/job-types', JobTypeController::class);
        Route::resource('/job-shifts', JobShiftController::class);
        Route::resource('/job-skills', JobSkillController::class);
        Route::resource('/job-experiences', JobExperienceController::class);

        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});