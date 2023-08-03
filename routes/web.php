<?php


use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyCollectionController;
use App\Models\Video;
use App\Models\Videoa;
use App\Models\Audioa;
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
    return view('Video', [
        'tag' => null
    ]);
});
Route::get('free-motion-graphics', function () {
    return view('motionGraphics', [
        'tag' => null
    ]);
});
Route::get('free-motion-graphics/{tag}', function ($tag) {
    return view('motionGraphics', [
        'tag' => '/' . $tag
    ]);
});
Route::get('stock-video-footage/{tag}', function ($tag) {
    return view('Video', [
        'tag' => '/' . $tag
    ]);
});
Route::get('free-stock-footage/{tag}', function ($tag) {
    return view('stockFootage', [
        'tag' => '/' . $tag
    ]);
});
Route::get('free-stock-footage', function () {
    return view('stockFootage', [
        'tag' => null
    ]);
});
Route::get('video/{id}', function (Videoa $id) {
    return view('VideoSingle', [
        'vid' => $id
    ]);
});
Route::get('Audio', function () {
    return view('audio', [
        'tag' => ''
    ]);
});
Route::get('Audio/{tag}', function ($tag) {
    return view('audio',[
        'tag' => '/'.$tag
    ]);
});
Route::get('royalty-free-music', function () {
    return view('audio');
});
Route::get('AudioSingle/{id}', function (Audioa $id) {
    return view('audioSingle', [
        'audio' => $id
    ]);
});
Route::get('royalty-free-sound-effects', function () {
    return view('soundEffects', [
        'tag' => ''
    ]);
});
Route::get('royalty-free-sound-effects/{tag}', function ($tag) {
    return view('soundEffects', [
        'tag' => '/'.$tag
    ]);
});
Route::get('Template', function () {
    return view('template');
});
Route::get('after-effects-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'After Effects Templates',
        'heroImg' => 'After.jpg',
        'tag' => ''
    ]);
});
Route::get('premiere-pro-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'Premiere Pro Templates',
        'heroImg' => 'Premiere.jpg',
        'tag' => ''
    ]);
});
Route::get('davinci-resolve-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'DaVinci Resolve Templates',
        'heroImg' => 'Davinci.jpg',
        'tag' => ''
    ]);
});
Route::get('final-cut-pro-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'Final Cut Pro Templates',
        'heroImg' => 'Final.jpg',
        'tag' => ''
    ]);
});
Route::get('motion-graphics-templates', function () {
    return view('aETemplate', [
        'pageTitle' => 'Motion Graphics Templates',
        'heroImg' => 'Motion.jpg',
        'tag' => ''
    ]);
});
Route::get('after-effects-templates/{tag}', function ($tag) {
    return view('aETemplate', [
        'pageTitle' => 'After Effects Templates',
        'heroImg' => 'After.jpg',
        'tag' => '/'.$tag
    ]);
});
Route::get('premiere-pro-templates/{tag}', function ($tag) {
    return view('aETemplate', [
        'pageTitle' => 'Premiere Pro Templates',
        'heroImg' => 'Premiere.jpg',
        'tag' => '/'.$tag
    ]);
});
Route::get('davinci-resolve-templates/{tag}', function ($tag) {
    return view('aETemplate', [
        'pageTitle' => 'DaVinci Resolve Templates',
        'heroImg' => 'Davinci.jpg',
        'tag' => '/'.$tag
    ]);
});
Route::get('final-cut-pro-templates/{tag}', function ($tag) {
    return view('aETemplate', [
        'pageTitle' => 'Final Cut Pro Templates',
        'heroImg' => 'Final.jpg',
        'tag' => '/'.$tag
    ]);
});
Route::get('motion-graphics-templates/{tag}', function ($tag) {
    return view('aETemplate', [
        'pageTitle' => 'Motion Graphics Templates',
        'heroImg' => 'Motion.jpg',
        'tag' => '/'.$tag
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
Route::get('Help', function () {
    return view('help');
});
Route::get('premium-plans', function () {
    return view('premium');
});
Route::get('favorites', function () {
    return view('profile', [
        'page' => 'favorites'
    ]);
});
Route::get('userdashboard', function () {
    return view('userdashboard');
});
Route::get('userdashboard/pendings', function () {
    return view('userdashboardP');
});
Route::get('userdashboard/approved', function () {
    return view('userdashboardA');
});
Route::get('userdashboard/rejected', function () {
    return view('userdashboardR');
});
Route::get('mycollections', function () {
    return view('profile', [
        'page' => 'mycollections'
    ]);
});
Route::get('collections/{id}', function ($id) {
    return view('profile', [
        'page' => 'collections',
        'id' => $id
    ]);
});
Route::get('history', function () {
    return view('profile', [
        'page' => 'history'
    ]);
});
Route::get('changepassword', function () {
    return view('profile', [
        'page' => 'changepassword'
    ]);
});
Route::get('profile', function () {
    return view('profile', [
        'page' => 'prpfile'
    ]);
});
Route::get('checkout', function () {
    return view('checkout');
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
Route::get('search', function () {
    return view('search');
});
Route::get('userdashboard', function () {
    return view('userdashboard');
});
Route::get('admindashboard', function () {
    return view('admindashboard');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::post('users/register', [UserController::class, 'store'])->name('store.post');
Route::post('users/login', [UserController::class, 'login'])->name('login.post');
Route::post('users/updatepass', [UserController::class, 'passChange'])->name('passUpdate.post');
Route::get('users/logout', [UserController::class, 'logout'])->name('logout.post');
Route::post('Video/upload', [VideoController::class, 'upload'])->name('video.post');
Route::post('Video/uploadr', [VideoController::class, 'uploadr'])->name('videor.post');
Route::post('Video/uploada', [VideoController::class, 'uploada'])->name('videoa.post');
Route::post('Audio/upload', [AudioController::class, 'upload'])->name('Audio.post');
Route::post('Audio/uploadr', [AudioController::class, 'uploadr'])->name('Audio.post');
Route::post('Audio/uploada', [AudioController::class, 'uploada'])->name('Audio.post');
Route::post('Template/uploadr', [TemplateController::class, 'uploadr'])->name('Audio.post');
Route::post('Template/uploada', [TemplateController::class, 'uploada'])->name('Audio.post');

Route::post('post/favorite', [FavoriteController::class, 'add']);
Route::get('Api/favorite/video', [FavoriteController::class, 'fetchVideo']);
Route::get('Api/favorite/audio', [FavoriteController::class, 'fetchAudio']);

Route::post('post/collection', [MyCollectionController::class, 'add'])->name('collection.post');
Route::get('Api/collection', [MyCollectionController::class, 'fetch']);
Route::get('Api/collection/video/{id}', [MyCollectionController::class, 'fetchVideo']);
Route::get('Api/collection/audio/{id}', [MyCollectionController::class, 'fetchAudio']);


Route::post('Template/upload', [TemplateController::class, 'upload'])->name('Template.post');

Route::get('Api/Video', [VideoController::class, 'fetch'])->name('videos.show');
Route::get('Api/Video/{tag}', [VideoController::class, 'fetchWhere'])->name('videosWhere.show');
Route::get('Api/VideoFootage', [VideoController::class, 'fetchFootage'])->name('videosFootage.show');
Route::get('Api/VideoFootage/{tag}', [VideoController::class, 'fetchFootageWhere'])->name('videosFootageWhere.show');
Route::get('Api/VideoMotion', [VideoController::class, 'fetchMotion'])->name('videosMotion.show');
Route::get('Api/VideoMotion/{tag}', [VideoController::class, 'fetchMotionWhere'])->name('videosMotionWhere.show');

Route::get('Api/p/Video', [VideoController::class, 'fetchp'])->name('videosp.show');
Route::get('Api/a/Video', [VideoController::class, 'fetcha'])->name('videosa.show');
Route::get('Api/r/Video', [VideoController::class, 'fetchr'])->name('videosr.show');
Route::get('Api/pa/Video', [VideoController::class, 'fetchpa'])->name('videosr.show');


Route::get('Api/p/Audio', [AudioController::class, 'fetchp'])->name('Audiosp.show');
Route::get('Api/a/Audio', [AudioController::class, 'fetcha'])->name('Audiosa.show');
Route::get('Api/r/Audio', [AudioController::class, 'fetchr'])->name('Audiosr.show');
Route::get('Api/pa/Audio', [AudioController::class, 'fetchpa'])->name('Audiosr.show');

Route::get('Api/p/Template', [TemplateController::class, 'fetchp'])->name('Templatep.show');
Route::get('Api/a/Template', [TemplateController::class, 'fetcha'])->name('Templatea.show');
Route::get('Api/r/Template', [TemplateController::class, 'fetchr'])->name('Templater.show');
Route::get('Api/pa/Template', [TemplateController::class, 'fetchpa'])->name('Templater.show');

Route::get('Api/Audio', [AudioController::class, 'fetch'])->name('Audios.show');
Route::get('Api/AudioSE', [AudioController::class, 'fetchSEffects'])->name('AudioSEs.show');
Route::get('Api/Audio/{tag}', [AudioController::class, 'fetchWhere'])->name('AudiosWhere.show');
Route::get('Api/AudioSE/{tag}', [AudioController::class, 'fetchSEffectsWhere'])->name('AudioSEsWhere.show');

Route::get('Api/Template', [TemplateController::class, 'fetch'])->name('Templates.show');

Route::get('Api/Template/AE', [TemplateController::class, 'fetchAE']);
Route::get('Api/Template/PP', [TemplateController::class, 'fetchPP']);
Route::get('Api/Template/DR', [TemplateController::class, 'fetchDR']);
Route::get('Api/Template/FC', [TemplateController::class, 'fetchFC']);
Route::get('Api/Template/MG', [TemplateController::class, 'fetchMG']);

Route::get('Api/Template/AE/{tag}', [TemplateController::class, 'fetchAEWhere']);
Route::get('Api/Template/PP/{tag}', [TemplateController::class, 'fetchPPWhere']);
Route::get('Api/Template/DR/{tag}', [TemplateController::class, 'fetchDRWhere']);
Route::get('Api/Template/FC/{tag}', [TemplateController::class, 'fetchFCWhere']);
Route::get('Api/Template/MG/{tag}', [TemplateController::class, 'fetchMGWhere']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));

