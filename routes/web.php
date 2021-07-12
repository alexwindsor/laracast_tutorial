<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\User;
use App\Models\Category;

// \Illuminate\Support\Facades\DB::listen(function ($query) {
//   logger($query->sql, $query->bindings);
// });

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');


// Route::get('categories/{category:slug}', function(Category $category) {
//
//   return view('posts.index', [
//     'posts' => $category->posts,
//     // 'currentCategory'
//   ]);
//
// });


// Route::get('authors/{author:username}', function(User $author) {
//
//   return view('posts.index', [
//     'posts' => $author->posts
//   ]);
//
// });



















//
