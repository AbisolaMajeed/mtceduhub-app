<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApplicantController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [AuthenticatedSessionController::class, 'dashbaord'])->name('dashboard');
        Route::get('/applicants', [ApplicantController::class, 'index'])->name('dashboard.applicants');
        Route::get('/archived-applicants', [ApplicantController::class, 'getArchivedApplicants'])->name('dashboard.archived-applicants');
        Route::get('/archive-applicant/{id}', [ApplicantController::class, 'archiveApplicant'])->name('dashboard.archive-applicant');
        Route::get('/restore-applicant/{id}', [ApplicantController::class, 'restoreApplicant'])->name('dashboard.restore-applicant');
        Route::get('/move-applicant-to-training/{id}', [ApplicantController::class, 'moveApplicantToTraining'])->name('dashboard.move-applicant-to-training');
        Route::get('/move-applicant-to-lead/{id}', [ApplicantController::class, 'moveApplicantToLead'])->name('dashboard.move-applicant-to-lead');

        Route::get('/accounts', [AdminController::class, 'index'])->name('dashboard.accounts');
        Route::get('/add-accounts', [AdminController::class, 'addAccounts'])->name('dashboard.add-accounts');
        Route::post('/save-add-accounts', [AdminController::class, 'saveAddAccounts'])->name('dashboard.save-add-accounts');
        Route::get('/archived-accounts', [AdminController::class, 'getArchivedAccounts'])->name('dashboard.archived-accounts');
        Route::get('/archive-account/{id}', [AdminController::class, 'archiveAccount'])->name('dashboard.archive-account');
        Route::get('/restore-account/{id}', [AdminController::class, 'restoreAccount'])->name('dashboard.restore-account');


        Route::get('/blogs', [BlogController::class, 'dashboardIndex'])->name('dashboard.blogs');
        Route::get('/add-blogs', [BlogController::class, 'addBlogs'])->name('dashboard.add-blogs');
        Route::post('/save-add-blogs', [BlogController::class, 'saveAddBlogs'])->name('dashboard.save-add-blogs');
        Route::get('/archived-blogs', [BlogController::class, 'getArchivedBlogs'])->name('dashboard.archived-blogs');
        Route::get('/archive-blog/{id}', [BlogController::class, 'archiveBlog'])->name('dashboard.archive-blog');
        Route::get('/restore-blog/{id}', [BlogController::class, 'restoreBlog'])->name('dashboard.restore-blog');

        Route::get('/courses', [CourseController::class, 'index'])->name('dashboard.courses');
        Route::get('/add-course', [CourseController::class, 'addCourse'])->name('dashboard.add-course');
        Route::post('/save-add-course', [CourseController::class, 'saveAddCourse'])->name('dashboard.save-add-course');
        Route::get('/archived-courses', [CourseController::class, 'getArchivedCourses'])->name('dashboard.archived-courses');
        Route::get('/archive-course/{id}', [CourseController::class, 'archiveCourse'])->name('dashboard.archive-course');
        Route::get('/restore-course/{id}', [CourseController::class, 'restoreCourse'])->name('dashboard.restore-course');
    });
});