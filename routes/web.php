<?php

use App\Models\Album;
use App\Models\Staff;
use App\Models\Talent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



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

//Album
// Route::get('/albums', function () {
//     return view('album', [
//         "title" => "Album"
//     ]);
// });

// Album Client
Route::get('/albums', [AlbumController::class, 'indexClient']);
Route::get('/albums/{album:slug}', [AlbumController::class, 'show']);

// Album Admin
Route::resource('album', AlbumController::class);


// Login Logout Register
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/dashboard', [LoginController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/register', function () {
    return view('register.register');
});

// Talent Client
Route::get('/talents', [TalentController::class, 'indexClient']);
Route::get('/talents/{talent:slug}', [TalentController::class, 'show']);

// Talent Admin
Route::resource('talent', TalentController::class);

// Trainee Client
Route::get('/trainees', [TraineeController::class, 'indexClient']);
Route::get('/trainees/{trainee:slug}', [TraineeController::class, 'show']);

// Trainee Admin
Route::resource('trainee', TraineeController::class);

// Staff Client
Route::get('/staffs', [StaffController::class, 'indexClient']);
Route::get('/staffs/{staff:slug}', [StaffController::class, 'show']);

// Staff Admin
Route::resource('staff', StaffController::class);

// Label Client
Route::get('/labels', [LabelController::class, 'indexClient']);
Route::get('/labels/{label:slug}', [LabelController::class, 'show']);

// Label Admin
Route::resource('label', LabelController::class);

// Image Admin
Route::resource('image', ImageController::class);

// Dashbpard Admin
// Route::resource('dashboard', DashboardController::class);




//admin

// 

Route::get('/user', function () {
    return view('template');
});


// Route::get('/liststaff', function () {
//     return view('dashboard.list-staff', [
//         "title" => "Staffs"
//     ]);
// });

// Route::get('/listlabel', function () {
//     return view('dashboard.list-label', [
//         "title" => "Labels"
//     ]);
// });

// Route::get('/listtrainee', function () {
//     return view('dashboard.list-trainee', [
//         "title" => "Trainee"
//     ]);
// });

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

// Route::get('/staff', function () {
//     return view('staff', [
//         "title" => "Staffs",
//         //  "staffs" => Staff::all()
//     ]);
// });

// Route::get('/talent', function () {
//     return view('talent', [
//         "title" => "Talents"
//     ]);
// });

// Route::get('/form-talent', function () {
//     return view('dashboard.form-talent', [
//         "title" => "form_talent"
//     ]);
// });

// Route::get('/form-staff', function () {
//     return view('dashboard.form-staff', [
//         "title" => "form_staff"
//     ]);
// });

// Route::get('/form-label', function () {
//     return view('dashboard.form-label', [
//         "title" => "form_label"
//     ]);
// });

// Route::get('/form-trainee', function () {
//     return view('dashboard.form-trainee', [
//         "title" => "form_trainee"
//     ]);
// });

// Route::get('/form-imageAdd', function () {
//     return view('dashboard.form-imageAdd', [
//         "title" => "form-imageAdd"
//     ]);
// });

//test

Route::get('/test', function () {
    return view('layouts.main');
});
