<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class AlbumController extends Controller
{
    public function index()
    {
        return view('album.index');
    }
}