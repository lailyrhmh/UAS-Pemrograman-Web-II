<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;
 
class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            "title" => "Login",
            "active" => "login"
        ]);

        // return view('album.index');     tybnnb
    }

}