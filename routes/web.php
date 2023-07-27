<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\TemplateController;
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
Route::get('Audio', function () {
    return view('audio');
});
Route::get('Template', function () {
    return view('template');
});
Route::get('uploadVid', function () {
    return view('uploadVid');
});
Route::get('uploadAud', function () {
    return view('uploadAud');
});
Route::get('uploadTemp', function () {
    return view('uploadTemp');
});
Route::post('users/register', [UserController::class, 'store'])->name('store.post');
Route::post('users/login', [UserController::class, 'login'])->name('login.post');
Route::post('Video/upload', [VideoController::class, 'upload'])->name('video.post');
Route::post('Audio/upload', [AudioController::class, 'upload'])->name('Audio.post');
Route::post('Template/upload', [TemplateController::class, 'upload'])->name('Template.post');
Route::get('Api/Video', [VideoController::class, 'fetch'])->name('videos.show');
Route::get('Api/Audio', [AudioController::class, 'fetch'])->name('Audios.show');
Route::get('Api/Template', [TemplateController::class, 'fetch'])->name('Templates.show');
