<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('index');
});

//usercontroller routes

Route::get('/reg', [UserController::class, 'reg']);
Route::get('/log', [UserController::class, 'log']);

Route::post('/blog', [UserController::class, 'ShowBlogPage']);

Route::post('/blogOne', [UserController::class, 'ShowBlogPageOne']);

//POSTcontroller routes
Route::post('/create_post', [PostController::class, 'MCreatePost']);

