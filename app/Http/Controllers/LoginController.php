<?php

namespace App\Http\Middleware;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index()
    {
        // return view('home');
        return view('dashboard.dashboard', [
            "title" => "Dashboard"
        ]);

        // return view('album.index');     tybnnb
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('login.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('dashboard');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
