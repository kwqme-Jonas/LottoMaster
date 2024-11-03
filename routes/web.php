<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');

Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('posts.show');

//Route::post('/profile/upload-id', [ProfileController::class, 'uploadIdDocument'])->name('profile.upload-id');

Route::group(['auth' => 'approved'], function () {
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->name('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //Route::get('/dashboard', function () {
       // return view('dashboard');
    //})->name('dashboard');
});
