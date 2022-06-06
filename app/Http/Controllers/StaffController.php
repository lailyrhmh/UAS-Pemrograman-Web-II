<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::with('label')->paginate(10);
        return view('dashboard.list-staff', [
            "title" => "Our Staffs"
        ], compact('staffs'));
    }

    public function indexClient()
    {
        return view('staffs', [
            "title" => "Our Staffs",
            "staffss" => Staff::all()
        ]);
    }

    public function show(Staff $staff)
    {
        return view('staff', [
            "title" => "Info Staff",
            "staff" => $staff
        ]);
    }

    public function create()
    {
        $label = Label::all();
        return view('dashboard.form-staffAdd', [
            "title" => "Info Staff"
        ], compact('label'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'label_id' => 'required',
            'staff_name' => 'required',
            'division' => 'required'
        ]);

        $staff = Staff::create([
            'label_id' => $request->label_id,
            'staff_name' => $request->staff_name,
            'division' => $request->division,
            'slug' => Str::slug($request->staff_name)
        ]);

        if ($staff) {
            return redirect()
                ->route('staff.index')
                ->with([
                    'success' => 'New Staff has been created successfully'
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
        $staffs = Staff::findOrFail($id);
        return view('dashboard.form-staffEdit', [
            "title" => "Info Staff"
        ], compact('staffs', 'label'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'label_id' => 'required',
            'staff_name' => 'required',
            'division' => 'required'
        ]);

        $staff = Staff::findOrFail($id);

        $staff->update([
            'label_id' => $request->label_id,
            'staff_name' => $request->staff_name,
            'division' => $request->division,
            'slug' => Str::slug($request->label_id)
        ]);

        if ($staff) {
            return redirect()
                ->route('staff.index')
                ->with([
                    'success' => 'Staff has been updated successfully'
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
        $staff = Staff::findOrFail($id);
        $staff->delete();

        if ($staff) {
            return redirect()
                ->route('staff.index')
                ->with([
                    'success' => 'Staff has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('staff.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
