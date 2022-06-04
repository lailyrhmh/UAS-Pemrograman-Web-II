<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            "title" => "Register",
            "active" => "register"
        ]);

        // return view('album.index');
    }

    public function store(Request $request)
    {
        //dd('registrasi berhasil!!');
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        User::create($request);

        //ßdd('registrasi berhasil!!');

        return $request->all();
    }
}
