<?php

use App\Http\Controllers\CommentController;
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
// Route::resource('comments', CommentController::class);
// Route::resource('comments', CommentController::class);
// Route::resource('users', UserController::class);

Route::resources([
    'comments' => CommentController::class,
    'users' => UserController::class
]);
// Route::get('/clear', function() {

//     $exitCode = Artisan::call('config:cache');
//     $exitCode = Artisan::call('config:clear');
//     $exitCode = Artisan::call('cache:clear');
//     $exitCode = Artisan::call('view:clear');
//     $exitCode = Artisan::call('route:clear');
//     $exitCode = Artisan::call('clear-compiled');
//     return 'DONE';
// });
