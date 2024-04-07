<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseController;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $posts = [];
    if (auth()->check()){
    $posts= auth()->user()->usersPosts()->latest()->get();
    }
    return view('home', ['posts'=>$posts]);
});

Route::post('/register', [UseController::class, 'register']);

Route::post('/logout', [UseController::class, 'logout']);

Route::post('/login', [UseController::class, 'login']);

//Blog post
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}',[PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}',[PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}',[PostController::class, 'deletePost']);