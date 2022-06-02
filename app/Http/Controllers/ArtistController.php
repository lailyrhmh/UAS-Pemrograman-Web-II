<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        return view('artists', [
            "title" => "Artists",
            "artists" => Artist::all()
        ]);

        // return view('album.index');
    }
}
