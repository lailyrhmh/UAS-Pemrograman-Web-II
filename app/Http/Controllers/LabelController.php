<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Staff;
use App\Models\Talent;
use App\Models\Trainee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index()
    {
        $labels = Label::paginate(10);
        // echo $albums;
        return view('dashboard.list-label', [
            "title" => "Our Labels"
        ], compact('labels'));
    }

    public function indexClient()
    {
        return view('labels', [
            "title" => "Our Labels",
            "labelss" => Label::all()
        ]);
    }

    public function show(Label $label)
    {
        return view('label', [
            "title" => "Info Label",
            "label" => $label
        ]);
    }

    public function create()
    {
        $label = Talent::all();
        $trainee = Trainee::all();
        $staff = Staff::all();
        return view('dashboard.form-labelAdd', [
            "title" => "Info Label"
        ], compact('label', 'trainee', 'staff'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            // 'label_id' => 'required',
            'label_name' => 'required',
            'branch' => 'required'
        ]);

        $label = Label::create([
            // 'label_id' => $request->label_id,
            'label_name' => $request->label_name,
            'branch' => $request->branch,
            'slug' => Str::slug($request->label_name)
        ]);

        if ($label) {
            return redirect()
                ->route('label.index')
                ->with([
                    'success' => 'New Label has been created successfully'
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
        $label = Talent::all();
        $trainee = Trainee::all();
        $staff = Staff::all();
        $labels = Label::findOrFail($id);
        return view('dashboard.form-labelEdit', [
            "title" => "Info Label"
        ], compact('labels', 'label', 'trainee', 'staff'));
     }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'label_id' => 'required',
            'label_name' => 'required',
            'branch' => 'required'
        ]);

        $label = Label::findOrFail($id);

        $label->update([
            'label_id' => $request->label_id,
            'label_name' => $request->label_name,
            'branch' => $request->branch,
            'slug' => Str::slug($request->label_id)
        ]);

        if ($label) {
            return redirect()
                ->route('label.index')
                ->with([
                    'success' => 'Label has been updated successfully'
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
        $label = Label::findOrFail($id);
        $label->delete();

        if ($label) {
            return redirect()
                ->route('label.index')
                ->with([
                    'success' => 'Label has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('label.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
