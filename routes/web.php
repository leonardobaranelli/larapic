<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;

Auth::routes();

// Overall
Route::get('/',
    [HomeController::class, 'index'])
    ->name('home');


// User
Route::get('config',
    [UserController::class, 'config'])
    ->name('config');

Route::post('user/update',
    [UserController::class, 'update'])
    ->name('user.update');

Route::get('user/avatar/{filename}',
    [UserController::class, 'getImage'])
    ->name('user.avatar');

Route::get('profile/{id}',
    [UserController::class, 'profile'])
    ->name('profile');

Route::get('people/{search?}',
    [UserController::class, 'index'])
    ->name('user.index');


 // Image
Route::get('upload-image',
    [ImageController::class, 'create'])
    ->name('image.create');

Route::post('image/save',
    [ImageController::class, 'save'])
    ->name('image.save');
    
Route::get('image/file/{filename}',
    [ImageController::class, 'getImage'])
    ->name('image.file');

Route::get('image/{id}',
    [ImageController::class, 'detail'])
    ->name('image.detail');
    
Route::get('image/delete/{id}',
    [ImageController::class, 'delete'])
    ->name('image.delete');
    
Route::get('image/edit/{id}',
    [ImageController::class, 'edit'])
    ->name('image.edit');

Route::post('image/update',
    [ImageController::class, 'update'])
    ->name('image.update');    


// Comment
Route::post('comment/save',
    [CommentController::class, 'save'])
    ->name('comment.save');

Route::get('comment/delete/{id}',
    [CommentController::class, 'delete'])
    ->name('comment.delete');
    

// Like    
Route::get('like/{image_id}',
    [LikeController::class, 'like'])
    ->name('like.save');

Route::get('dislike/{image_id}',
    [LikeController::class, 'dislike'])
    ->name('dislike.save');

Route::get('likes',
    [LikeController::class, 'index'])
    ->name('likes');