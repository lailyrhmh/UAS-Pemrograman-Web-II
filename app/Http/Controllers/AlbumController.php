<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Http\Controllers\Controller;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use App\Models\User;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::with('talent')->orderBy('id')->paginate(10);
        // echo $albums;
        return view('dashboard.list-album', [
            "title" => "The Albums"
        ], compact('albums'));
    }

    public function indexClient()
    {
        return view('albums', [
            "title" => "The Albums",
            "albumss" => Album::all()
        ]);
    }

    public function show(Album $album)
    {
        // $albums = Album::find($album);
        $albums = Album::with('talent');
        return view('album', [
            "title" => "Info Album",
            "album" => $album
        ], compact('albums'));
    }

    public function create()
    {
        $talent = Talent::all();
        return view('dashboard.form-albumAdd', [
            "title" => "Info Album"
        ], compact('talent'));
        
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('album-image');
        // dd($request->all());

        $this->validate($request, [
            'title' => 'required|string|max:155',
            'talent_id' => 'required|numeric',
            'description' => 'required'
        ]);

        $album = Album::create([
            'title' => $request->title,
            'talent_id' => $request->talent_id,
            'description' => $request->description,
            'slug' => Str::slug($request->title)
        ]);

        // dd($request);

        if ($album) {
            return redirect()
                ->route('album.index')
                ->with([
                    'success' => 'New Album has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    // --------------------------- Read --------------------------------
    // public function showAdmin($id)
    // {
    //     // $albums = Album::find($album);
    //     $albums = Album::with('talent');
    //     return view('dashboard.detail-album', [
    //         "title" => "Info Album",
    //         "album" => $id
    //     ], compact('albums'));
    // }
    // --------------------------- Edit --------------------------------
    public function edit($id)
    {
        $talent = Talent::all();
        $albums = Album::with('talent')->findOrFail($id);
        return view('dashboard.form-albumEdit', [
            "title" => "Info Album"
        ], compact('albums', 'talent'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:155',
            'talent_id' => 'required',
            'description' => 'required'
        ]);

        $album = Album::findOrFail($id);

        $album->update([
            'title' => $request->title,
            'talent_id' => $request->talent_id,
            'description' => $request->description,
            'slug' => Str::slug($request->title)
        ]);

        if ($album) {
            return redirect()
                ->route('album.index')
                ->with([
                    'success' => 'Album has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    // --------------------------- Delete --------------------------------
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        if ($album) {
            return redirect()
                ->route('album.index')
                ->with([
                    'success' => 'Album has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('album.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
