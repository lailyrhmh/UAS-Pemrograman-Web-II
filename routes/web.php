<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Models\Album;
use App\Models\Artist;

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

//user

Route::get('/', function () {
    return view('home', [
        "title" => "Homepage"
    ]);
});

Route::get('/albums', [AlbumController::class, 'index']);
Route::get('/albums/{album:slug}', [AlbumController::class, 'show']);

// Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists', function() {
    return view('artists', [
        "title" => "Artists",
        "artists" => Artist::all()
    ]);
});
Route::get('/artists/{artist:slug}', function(Artist $artist) {
    return view('albums', [
        "title" => "The Artist: $artist->artist_name",
        "albums" => $artist->albums,
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
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
