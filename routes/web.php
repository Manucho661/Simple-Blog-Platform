<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;

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
    $posts = Post::where('user_id', auth()->id())->get();
$category = 'Politcs';
            
    return view('blog', ['posts'=>$posts]);
});

//usercontroller routes

Route::get('/reg', [UserController::class, 'reg']);
Route::get('/log', [UserController::class, 'log']);

Route::post('/blog', [UserController::class, 'ShowBlogPage']);

Route::post('/blogOne', [UserController::class, 'ShowBlogPageOne']);

//POSTcontroller routes
Route::post('/create_post', [PostController::class, 'MCreatePost']);
Route::post('/logout', [PostController::class, 'Logout']);
Route::get('/EditPost/{posts}',[PostController::class,'EditPostF']);
Route::put('/EditPost/{posts}',[PostController::class,'UpdatePostF']);
Route::put('/EditPost/{posts}',[PostController::class,'UpdatePostF']);
Route::delete('/deletePost/{posts}',[PostController::class,'deletePostF']);

// PostCategories
Route::get('politicsPage', [CategoriesController::class, 'politics']) -> name('politics');
Route::get('relationshipsPage', [CategoriesController::class, 'relationships']) -> name('relationships');
Route::get('educationPage', [CategoriesController::class, 'education']) -> name('education');
Route::get('lifestylePage', [CategoriesController::class, 'lifestyle']) -> name('lifestyle');
Route::get('allPage', [CategoriesController::class, 'all']) -> name('all');