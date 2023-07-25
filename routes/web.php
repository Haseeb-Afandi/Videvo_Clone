<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
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
    return view('home');
});
Route::get('Log-in', function () {
    return view('Log-in');
});
Route::get('stock-video-footage', function () {
    return view('Videos');
});
Route::get('uploadVid', function () {
    return view('uploadVid');
});
Route::post('users/register', [UserController::class, 'store'])->name('store.post');
Route::post('users/login', [UserController::class, 'login'])->name('login.post');
Route::post('Video/upload', [VideoController::class, 'upload'])->name('video.post');
Route::get('Api/Video', [VideoController::class, 'fetch'])->name('videos.show');
