<?php

// use App\Models\Post;
// use App\Models\User;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Josua Sirait",
        "email" => "josuasirait25@gmail.com",
        "image" => "gambar1.jpg",
        "active" => "about"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){

    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
    
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
    })->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


// Route::get('/categories/{category:slug}', function(Category $category){

//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'posts' => $category->posts->load('author', 'category'),
//         'active' => 'categories'
//         // 'category' => $category->name
//     ]);

// });

// Route::get('/authors/{author:username}', function(User $author){

//     return view ('posts', [
//         'title' => "Post by Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//         'active' => 'posts'
//     ]);

// });