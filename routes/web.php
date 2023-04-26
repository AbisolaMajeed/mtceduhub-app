<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('courses', [CourseController::class, 'index'])->name('courses');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('register',[RegisterController::class, 'index'])->name('register');
Route::get('testimoials',[TestimonialController::class, 'index'])->name('testimonials');
Route::get('gallery',[GalleryController::class, 'index'])->name('gallery');
Route::get('contact',[ContactController::class, 'index'])->name('contact');
Route::get('blog',[BlogController::class, 'index'])->name('blog');


Route::group(
    [
        'prefix' => 'courses'
    ], function () {
        Route::get('/aws-cloud', [CourseController::class, 'viewAwsCloud']);
        Route::get('/aws-solutions', [CourseController::class, 'viewAwsSolutions']);
        Route::get('/aws-sysops', [CourseController::class, 'viewAwsSysops']);
        Route::get('/aws-develop', [CourseController::class, 'viewAwsDevelop']);
        Route::get('/aws-solution', [CourseController::class, 'viewAwsSolution']);
        Route::get('/aws-devops', [CourseController::class, 'viewAwsDevops']);
    }
);