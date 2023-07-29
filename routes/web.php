<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Template;
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

Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

Route::controller(FacebookController::class)->group(function(){
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('authorized/facebook/callback', 'handleFacebookCallback');
});

Route::get('/', function () {
    return view('home');
});
Route::get('Log-in', function () {
    return view('Log-in');
});
Route::get('stock-video-footage', function () {
    return view('Video');
});
Route::get('video/{id}', function (Video $id) {
    return view('VideoSingle', [
        'vid' => $id
    ]);
});
Route::get('Audio', function () {
    return view('audio');
});
Route::get('royalty-free-music', function () {
    return view('audio');
});
Route::get('Audio/{id}', function (Audio $id) {
    return view('audioSingle', [
        'audio' => $id
    ]);
});
Route::get('royalty-free-sound-effects', function () {
    return view('soundEffects');
});
Route::get('Template', function () {
    return view('template');
});
Route::get('after-effects-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'After Effects Templates',
        'heroImg' => 'After.jpg'
    ]);
});
Route::get('premiere-pro-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'Premiere Pro Templates',
        'heroImg' => 'Premiere.jpg'
    ]);
});
Route::get('davinci-resolve-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'DaVinci Resolve Templates',
        'heroImg' => 'Davinci.jpg'
    ]);
});
Route::get('final-cut-pro-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'Final Cut Pro Templates',
        'heroImg' => 'Final.jpg'
    ]);
});
Route::get('motion-graphics-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'Motion Graphics Templates',
        'heroImg' => 'Motion.jpg'
    ]);
});
Route::get('Templates/{id}', function (Template $id) {
    return view('templateSingle', [
        'template' => $id
    ]);
});
Route::get('collections', function () {
    return view('collections');
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
