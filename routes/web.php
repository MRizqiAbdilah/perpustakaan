<?php

// use App\Http\Controllers\HomeController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberLoginController;
use App\Http\Controllers\MemberRegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/books', PostController::class)->middleware('auth');
Route::get('/book/checkSlug', [PostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/categories', CategoryController::class)->middleware('auth');
Route::get('/categories/checkSlug', [CategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/peminjaman', PeminjamanController::class)->middleware('auth');
Route::get('/pengembalian', [PeminjamanController::class, 'kembali'])->middleware('auth');
Route::get('/laporan', [PeminjamanController::class, 'laporan']);
Route::resource('/users', UsersController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/member', [MemberRegisterController::class, 'index']);
Route::get('/member/create', [MemberRegisterController::class, 'create']);
Route::post('/member', [MemberRegisterController::class, 'store']);


// Halaman single Post
Route::get('books/{post:slug}', [PostController::class, 'show']);
