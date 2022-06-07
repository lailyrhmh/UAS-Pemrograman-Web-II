<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use App\Http\Controllers\Controller;
use App\Models\Label;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use App\Models\User;

class TalentController extends Controller
{
    public function index()
    {
        $talents = Talent::with('label')->paginate(10);
        // echo $albums;
        return view('dashboard.list-talent', [
            "title" => "Our Talents"
        ], compact('talents'));
    }

    public function indexClient()
    {
        return view('talents', [
            "title" => "Our Talents",
            "talentss" => Talent::all()
        ]);
    }

    public function show(Talent $talent)
    {
        $talents = Talent::with('label');
        return view('talent', [
            "title" => "Info Talent",
            "talent" => $talent
        ], compact('talents'));
    }

    public function create()
    {
        $label = Label::all();
        return view('dashboard.form-talentAdd', [
            "title" => "Info Talent"
        ], compact('label'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'label_id' => 'required',
            'talent_name' => 'required'
        ]);

        $talent = Talent::create([
            'label_id' => $request->label_id,
            'talent_name' => $request->talent_name,
            'slug' => Str::slug($request->talent_name)
        ]);

        if ($talent) {
            return redirect()
                ->route('talent.index')
                ->with([
                    'success' => 'New Talent has been created successfully'
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
    // --------------------------- Edit --------------------------------
    public function edit($id)
    {
        $label = Label::all();
        $talents = Talent::findOrFail($id);
        return view('dashboard.form-talentEdit', [
            "title" => "Info Talent"
        ], compact('talents', 'label'));
     }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'label_id' => 'required',
            'talent_name' => 'required'
        ]);

        $talent = Talent::findOrFail($id);

        $talent->update([
            'label_id' => $request->label_id,
            'talent_name' => $request->talent_name,
            'slug' => Str::slug($request->label_id)
        ]);

        if ($talent) {
            return redirect()
                ->route('talent.index')
                ->with([
                    'success' => 'Talent has been updated successfully'
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
        $talent = Talent::findOrFail($id);
        $talent->delete();

        if ($talent) {
            return redirect()
                ->route('talent.index')
                ->with([
                    'success' => 'Talent has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('talent.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}

