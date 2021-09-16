<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/add', [App\Http\Controllers\PostController::class, 'index'])->name('add-post');
Route::post('/post/save', [App\Http\Controllers\PostController::class, 'store'])->name('save-post');
Route::get('/post/manage', [App\Http\Controllers\PostController::class, 'managepost'])->name('manage-post');
Route::get('post/delete/{id}', [App\Http\Controllers\PostController::class, 'remove']);
Route::get('post/edit/{id}', [App\Http\Controllers\PostController::class, 'postedit']);
Route::post('/update/post', [App\Http\Controllers\PostController::class, 'updatepost'])->name('update-post');

Route::get('helper',[PostController::class,'helpersfun']);






