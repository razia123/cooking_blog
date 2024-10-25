<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
// Route::get('/category/{slug}', [HomeController::class, 'categoryPostBySlug'])->name('category.post');
// Route::get('/post-detail/{slug}', [PostController::class, 'postDetailBySlug'])->name('post.detail');

// Authentication
Route::get('/login', [AuthenticationController::class, 'index'])->name('login.index');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

// Admin Routes
Route::group(['middleware' => 'auth'], function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Category Routes
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

    // Logout
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});
