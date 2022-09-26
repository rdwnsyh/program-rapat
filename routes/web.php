<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardController;

use App\Models\Post;

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
// home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// posts
Route::get('/data-rapat', [PostController::class, 'index']);

// single post
Route::get('/data-rapat/{post:slug}', [PostController::class, 'show']);

// login
Route::get('/login',  [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',  [LoginController::class, 'authenticate']);
Route::post('/logout',  [LoginController::class, 'logout']);

// registrasi
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/lihat-data', [DashboardController::class, 'show']);
Route::get('/dashboard/lihat-data/{post:slug}', [DashboardController::class, 'detail']);


// dashboard post
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');
