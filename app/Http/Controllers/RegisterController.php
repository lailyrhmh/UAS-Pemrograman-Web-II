<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $validatedData = $request -> validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        //$request->session()->flash

        return redirect('/login')->with('success', 'Registation successfull!');;
    }
}
