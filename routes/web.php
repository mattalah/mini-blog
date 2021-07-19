<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', [App\Http\Controllers\PostsController::class, 'index'])->middleware('auth')->name('blog');
Route::post('/post', [App\Http\Controllers\PostsController::class, 'store'])->middleware('auth')->name('post.store');
Route::post('/comment', [App\Http\Controllers\CommentsController::class, 'store'])->middleware('auth')->name('comment.store');
Route::post('/post/destroy', [App\Http\Controllers\PostsController::class, 'delete'])->middleware('auth')->name('post.destroy');
Route::post('/comment/destroy', [App\Http\Controllers\CommentsController::class, 'delete'])->middleware('auth')->name('comment.destroy');
