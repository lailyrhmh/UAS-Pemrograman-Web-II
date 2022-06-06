<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Trainee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function index()
    {
        $trainees = Trainee::with('label')->paginate(10);
        return view('dashboard.list-trainee', [
            "title" => "Our Trainees"
        ], compact('trainees'));
    }

    public function indexClient()
    {
        return view('trainees', [
            "title" => "Our Trainees",
            "traineess" => Trainee::all()
        ]);
    }

    public function show(Trainee $trainee)
    {
        return view('trainee', [
            "title" => "Info Trainee",
            "trainee" => $trainee
        ]);
    }

    public function create()
    {
        $label = Label::all();
        return view('dashboard.form-traineeAdd', [
            "title" => "Info Trainee"
        ], compact('label'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'label_id' => 'required',
            'trainee_name' => 'required'
        ]);

        $trainee = Trainee::create([
            'label_id' => $request->label_id,
            'trainee_name' => $request->trainee_name,
            'slug' => Str::slug($request->trainee_name)
        ]);

        if ($trainee) {
            return redirect()
                ->route('trainee.index')
                ->with([
                    'success' => 'New Trainee has been created successfully'
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
        $trainees = Trainee::findOrFail($id);
        return view('dashboard.form-traineeEdit', [
            "title" => "Info Trainee"
        ], compact('trainees', 'label'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'label_id' => 'required',
            'trainee_name' => 'required'
        ]);

        $trainee = Trainee::findOrFail($id);

        $trainee->update([
            'label_id' => $request->label_id,
            'trainee_name' => $request->trainee_name,
            'slug' => Str::slug($request->label_id)
        ]);

        if ($trainee) {
            return redirect()
                ->route('trainee.index')
                ->with([
                    'success' => 'Trainee has been updated successfully'
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
        $trainee = Trainee::findOrFail($id);
        $trainee->delete();

        if ($trainee) {
            return redirect()
                ->route('trainee.index')
                ->with([
                    'success' => 'Trainee has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('trainee.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
