@extends('dashboard.main')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('staff.create') }}" class="btn btn-w-m btn-primary">Add Staff</a>
        </div>
    </div>
    <div class="row">
        @forelse ($staffs as $staff)
        <div class="col-lg-3">
            <div class="contact-box center-version">

                <a href="profile.html">

                    <img alt="image" class="rounded-circle" src="img/a2.jpg">


                    <h3 class="m-b-xs"><strong>{{ $staff->staff_name }}</strong></h3>

                    <div class="font-bold">{{ $staff->division }}</div>

                </a>
                <div class="contact-box-footer">

                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('staff.destroy', $staff->id) }}" method="POST">
                    <div class="m-t-xs btn-group">
                        <a href="/detail-staff"  class="btn btn-xs btn-primary"></i> View </a>
                        <a href="{{ route('staff.edit', $staff->id) }}"  class="btn btn-xs btn-primary"></i> Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-xs btn-danger"></i> Delete</button>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
 @endsection