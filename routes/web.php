<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/category/{slug}', [CategoryController::class, 'categoryPostBySlug'])->name('category.post');
Route::get('/post-detail/{slug}', [PostController::class, 'postDetailBySlug'])->name('post.detail');

// Authentication
Route::get('/login', [DashboardController::class, 'login'])->name('login');


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

