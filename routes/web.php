<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Company\CompanySizeController;
use App\Http\Controllers\Admin\Company\IndustryController;
use App\Http\Controllers\Admin\Company\OwnershipTypeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\General\MaritalStatusController;
use App\Http\Controllers\Admin\Job\CareerLevelController;
use App\Http\Controllers\Admin\Job\DegreeLevelController;
use App\Http\Controllers\Admin\Job\DegreeTypeController;
use App\Http\Controllers\Admin\Job\FunctionalAreaController;
use App\Http\Controllers\Admin\Job\JobCategoryController;
use App\Http\Controllers\Admin\Job\JobExperienceController;
use App\Http\Controllers\Admin\Job\JobShiftController;
use App\Http\Controllers\Admin\Job\JobSkillController;
use App\Http\Controllers\Admin\Job\JobTagsController;
use App\Http\Controllers\Admin\Job\JobTypeController;
use App\Http\Controllers\Admin\Job\LanguageLevelController;
use App\Http\Controllers\Admin\Job\SalaryCurrencyController;
use App\Http\Controllers\Admin\Job\SalaryPeriodController;
use App\Http\Controllers\Admin\Location\CityController;
use App\Http\Controllers\Admin\Location\CountryController;
use App\Http\Controllers\Admin\Permission\PermissionController;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\Candidate\CandidateEducationController;
use App\Http\Controllers\Candidate\CandidateEmploymentController;
use App\Http\Controllers\Candidate\CandidateRefereceController;
use App\Http\Controllers\Candidate\CandidateTrainingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Recruiter\CompanyController;
use App\Http\Controllers\Recruiter\JobController;
use App\Http\Controllers\Recruiter\RecruiterController;
use Illuminate\Support\Facades\Route;

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


Route::prefix('candidate')->group(function (){
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->middleware(['auth', 'verified'])->name('candidate.dashboard');
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::resource('/my-profiles', CandidateController::class);
        Route::resource('/educations', CandidateEducationController::class);
        Route::resource('/trainings', CandidateTrainingController::class);
        Route::resource('/employments', CandidateEmploymentController::class);
        Route::resource('/references', CandidateRefereceController::class);
        
    });
});


require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
    Route::match(['get', 'post'], '/login', [AdminController::class, 'login'])->name('admin.login');
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');
        Route::resource('/permissions', PermissionController::class);
        Route::resource('/countries', CountryController::class);
        Route::resource('/cities', CityController::class);
        Route::resource('/job-categories', JobCategoryController::class);
        Route::resource('/job-tags', JobTagsController::class);
        Route::resource('/job-types', JobTypeController::class);
        Route::resource('/job-shifts', JobShiftController::class);
        Route::resource('/job-skills', JobSkillController::class);
        Route::resource('/job-experiences', JobExperienceController::class);
        Route::resource('/career-levels', CareerLevelController::class);
        Route::resource('/language-levels', LanguageLevelController::class);
        Route::resource('/degree-levels', DegreeLevelController::class);
        Route::resource('/degree-types', DegreeTypeController::class);
        Route::resource('/functional-areas', FunctionalAreaController::class);
        Route::resource('/marital-status', MaritalStatusController::class);
        Route::resource('/salary-periods', SalaryPeriodController::class);
        Route::resource('/salary-currencies', SalaryCurrencyController::class);
        Route::resource('/company-sizes', CompanySizeController::class);
        Route::resource('/ownership-types', OwnershipTypeController::class);
        Route::resource('/industries', IndustryController::class);

        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});

/*
|--------------------------------------------------------------------------
| Recruiter Routes
|--------------------------------------------------------------------------
*/

Route::prefix('recruiter')->group(function () {
    Route::match(['get', 'post'], '/login', [RecruiterController::class, 'login'])->name('recruiter.login');
    Route::match(['get', 'post'], '/register', [RecruiterController::class, 'register'])->name('recruiter.register');
    Route::match(['get', 'post'], '/forgot-password', [RecruiterController::class, 'forgotPassword'])->name('recruiter.forgot.password');
    Route::get('/reset-password/{token}/{email}', [RecruiterController::class, 'resetPassword'])->name('recruiter.reset.password');
    Route::post('/update-password', [RecruiterController::class, 'updatePassword'])->name('recruiter.update.password');
    Route::middleware(['recruiter'])->group(function () {
        Route::get('/dashboard', [RecruiterController::class, 'index'])->name('recruiter.index');
        Route::resource('/profiles', CompanyController::class);
        Route::resource('/jobs', JobController::class);
        Route::get('/logout', [RecruiterController::class, 'logout'])->name('recruiter.logout');
    });

});
