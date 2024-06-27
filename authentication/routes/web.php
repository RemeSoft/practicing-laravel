<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Admin\AdminController;

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

// blog routes
Route::get('/', [BlogController::class, 'home'])->name('blog.home');
Route::get('/post/{id}', [BlogController::class, 'post'])->name('blog.home');
Route::get('about', [BlogController::class, 'about'])->name('blog.about');

// admin routes
Route::prefix('/admin')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});