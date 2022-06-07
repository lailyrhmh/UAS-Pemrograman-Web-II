<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Staff;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $people = Staff::with('talent', 'trainee', 'staff');
        $item = Album::class;
        return view('dashboard.dashboard', compact('people', 'item'));
    }
}
