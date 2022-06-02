<?php
 
namespace App\Http\Controllers;
 
use App\Models\Album;
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class AlbumController extends Controller
{
    public function index()
    {
        return view('albums', [
            "title" => "Albums",
            "albums" => Album::all()
        ]);

        // return view('album.index');
    }

    public function show(Album $album)
    {
        return view('album', [
            "title" => "Info Album",
            "album" => $album
        ]);
    }
}