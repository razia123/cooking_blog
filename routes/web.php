<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TagController;
use App\Models\Category;
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

// Home page routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/category/{slug}', [HomeController::class, 'categoryPostBySlug'])->name('category.post');
Route::get('/post-detail/{slug}', [HomeController::class, 'postDetailBySlug'])->name('post.detail');

// Authentication
Route::get('/login', [AuthenticationController::class, 'index'])->name('login.index');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/customer-login', [AuthenticationController::class, 'customerLogin'])->name('login.customer');
Route::get('/customer-register', [AuthenticationController::class, 'customerRegister'])->name('register.customer');
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/call-back', [GoogleController::class, 'handleGoogleCallback']);

// Admin Routes
Route::group(['middleware' => 'auth'], function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile Routes
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    // Category Routes
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category-create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category-store', [CategoryController::class, 'storeCategory'])->name('category.store');

    // Post Routes
    Route::get('/posts', [PostController::class, 'index'])->name('post.index');
    Route::get('/post-create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post-store', [PostController::class, 'store'])->name('post.store');

    // Tag Routes
    Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
    Route::get('/tag-create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/tag-store', [TagController::class, 'store'])->name('tag.store');

    // Slider Routes
    Route::get('/slider', [SlideController::class, 'index'])->name('slide.index');
    Route::get('/slider-create', [SlideController::class, 'create'])->name('slider.create');
    Route::post('/slider-store', [SlideController::class, 'store'])->name('slider.store');


    // Logout
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});
