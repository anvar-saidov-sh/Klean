<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'main']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/project', [PageController::class, 'project'])->name('project');
// Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);
Route::resource('comments', CommentController::class);
Route::resource('comments', CommentController::class);
Route::resource('comments', CommentController::class);

// Route::resource([
//     'posts' => PostController::class,
//     'comments' => CommentController::class,
//     'users' => UserController::class,
// ]);
