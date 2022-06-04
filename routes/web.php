<?php

use App\Models\Album;
use App\Models\Staff;
use App\Models\Talent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



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
        "title" => "Homepage"
    ]);
});

Route::get('/albums', [AlbumController::class, 'index']);
Route::get('/albums/{album:slug}', [AlbumController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register', [DashboardController::class, 'index'])->middleware('auth');


// Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/talents', function() {
    return view('talents', [
        "title" => "Talents",
        "talents" => Talent::all()
    ]);
});
Route::get('/talents/{talent:slug}', function(Talent $talent) {
    return view('albums', [
        "title" => "The Talent: $talent->talent_name",
        "albums" => $talent->albums,
    ]);
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/logout', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('register.register');
});


//admin

// Route::get('/album', [AlbumController::class, 'index']);

Route::get('/user', function () {
    return view('template');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/listalbum', function () {
    return view('dashboard.list-album', [
        "title" => "Album"
    ]);
});


Route::get('/listtalent', function () {
    return view('dashboard.list-talent', [
        "title" => "Talents"
    ]);
});

Route::get('/liststaff', function () {
    return view('dashboard.list-staff', [
        "title" => "Staffs"
    ]);
});

Route::get('/listlabel', function () {
    return view('dashboard.list-label', [
        "title" => "Labels"
    ]);
});

Route::get('/listtrainee', function () {
    return view('dashboard.list-trainee', [
        "title" => "Trainee"
    ]);
});

Route::get('/detail-album', function () {
    return view('dashboard.detail-album', [
        "title" => "Dashboard"
    ]);
});

Route::get('/detail-talent', function () {
    return view('dashboard.detail-talent', [
        "title" => "Dashboard"
    ]);
});

Route::get('/detail-staff', function () {
    return view('dashboard.detail-staff', [
        "title" => "Dashboard"
    ]);
});

Route::get('/detail-label', function () {
    return view('dashboard.detail-label', [
        "title" => "Dashboard"
    ]);
});

Route::get('/detail-trainee', function () {
    return view('dashboard.detail-trainee', [
        "title" => "Dashboard"
    ]);
});

Route::get('/form-album', function () {
    return view('dashboard.form-album', [
        "title" => "form_album"
    ]);
});

Route::get('/staff', function() {
    return view('staff', [
        "title" => "Staffs",
        //  "staffs" => Staff::all()
    ]);
});

Route::get('/talent', function() {
    return view('talent', [
        "title" => "Talents"
    ]);
});

Route::get('/form-talent', function () {
    return view('dashboard.form-talent', [
        "title" => "form_talent"
    ]);
});

Route::get('/form-staff', function () {
    return view('dashboard.form-staff', [
        "title" => "form_staff"
    ]);
});

Route::get('/form-label', function () {
    return view('dashboard.form-label', [
        "title" => "form_label"
    ]);
});

Route::get('/form-trainee', function () {
    return view('dashboard.form-trainee', [
        "title" => "form_trainee"
    ]);
});

//test

Route::get('/test', function () {
    return view('layouts.main');
});
