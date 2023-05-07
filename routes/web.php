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
use App\Http\Controllers\NewsletterSubscriberController;

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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('courses', [CourseController::class, 'index'])->name('courses');
Route::get('courses/{title}',[CourseController::class, 'getACourse'])->name('a-course');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('course-register',[RegisterController::class, 'index'])->name('view-register');
Route::post('course-register',[RegisterController::class, 'register'])->name('course.register');
Route::get('testimoials',[TestimonialController::class, 'index'])->name('testimonials');
Route::get('gallery',[GalleryController::class, 'index'])->name('gallery');
Route::get('blog',[BlogController::class, 'index'])->name('blog');
Route::get('blog/{title}',[BlogController::class, 'singleBlog'])->name('single-blog');

Route::get('contact',[ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'mailContactForm']);

Route::post('newsletter-subscriber', [NewsletterSubscriberController::class, 'mailNewletterSubscriberForm']);

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';