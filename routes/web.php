<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

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

/*Route::get('posts', [PostsController::class, GeneratePosts])->middleware('log.requests');*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about_page');
});

Route::get('posts', function () {
    return view('posts_page');
});

Route::get('contact', function () {
    return view('contact_page');
});

