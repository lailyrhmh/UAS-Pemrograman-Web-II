@extends('dashboard.main')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <button type="button" class="btn btn-w-m btn-primary">Add Trainee</button>
        </div>
    </div>

    <div class="row">
        @forelse ($trainees as $trainee)
        <div class="col-lg-4">
            <div class="contact-box">
                <a class="row" href="profile.html">
                <div class="col-4">
                    <div class="text-center">
                        <img alt="image" class="rounded-circle m-t-xs img-fluid" src="img/a2.jpg">
                    </div>
                </div>
                <div class="col-8">
                    <h3><strong>{{ $trainee->trainee_name }}</strong></h3>
                    <p><i class="fa fa-building"></i> {{ $trainee->label->label_name }}</p>
                    <address>
                        <strong>Trainee Date</strong><br>
                        30 November 2020 <br>
                    </address>
    
                </div>
                <td class="text-left">
                    <div class="btn-group col-4">
                        <a href="/detail-trainee" class="btn btn-xs btn-outline btn-primary">View</i> </a>
                        <a href="/form-trainee" class="btn btn-xs btn-outline btn-primary">Edit</i> </a>
                        @csrf
                        @method('DELETE')
                        <a href="/" class="btn btn-xs btn-outline btn-danger">Delete</a>   
                    </div>
                </td>
                    </a>
            </div>
        </div>
        @empty
        @endforelse
    </div>
 @endsection