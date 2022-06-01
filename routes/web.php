<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

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

Route::get('/discover', function () {
    return view('discover', [
        "title" => "Discover"
    ]);
});

Route::get('/album', [AlbumController::class, 'index']);

Route::get('/user', function () {
    return view('template');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/album', function () {
    return view('list-album', [
        "title" => "Album"
    ]);
});

Route::get('/detail-album', function () {
    return view('detail-album', [
        "title" => "Dashboard"
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});