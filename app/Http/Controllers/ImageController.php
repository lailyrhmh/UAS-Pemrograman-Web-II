<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    // public function create()
    // {
        // $talent = Talent::all();
        // return view('dashboard.form-albumAdd', [
        //     "title" => "Info Album"
        // ], compact('talent'));
        
    // }

    public function create(){
        return view('dashboard.form-imageAdd', [
            "title" => "Info Album"]);
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('album-image');
        // dd($request->all());

        $this->validate($request, [
            'image' => 'required|file',
        ]);

        $image = $request->file('image');

        $path = 'album-image';

        $image->move($path, $image->getClientOriginalName());



        // $image = Image::create([
            // 'img' => $request->img
            // 'title' => $request->title,
            // 'talent_id' => $request->talent_id,
            // 'description' => $request->description,
        // ]);

        // dd($request);

        // if ($image) {
        //     return redirect()
        //         ->route('album.index')
        //         ->with([
        //             'success' => 'New Album has been created successfully'
        //         ]);
        // } else {
        //     return redirect()
        //         ->back()
        //         ->withInput()
        //         ->with([
        //             'error' => 'Some problem occurred, please try again'
        //         ]);
        // }
    }
}
