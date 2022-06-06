@extends('dashboard.main')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight ecommerce">


    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <a href="{{route('label.create')}}" type="button" class="btn btn-w-m btn-primary">Add Label</a>
        </div>
    </div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">

                <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                    <thead>
                    <tr>

                        <th>Label ID</th>
                        <th data-hide="phone">Label Name</th>
                        <th data-hide="phone">Branch</th>
                        <th data-hide="phone">Total Staffs</th>
                        <th data-hide="phone">Total Talents</th>
                        <th data-hide="phone">Total Trainees</th>
                        <th data-hide="phone">Established Date</th>
                        <th></th>
                        <th class="text-right"> Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($labels as $label)
                    <tr>
                        <td>
                           {{ $label->id }}
                        </td>
                        <td>
                            {{ $label->label_name }}
                        </td>
                        <td>
                            {{ $label->branch }}
                        </td>
                        <td>
                            {{ $label->staff->count() }}
                        </td>
                        <td>
                            {{ $label->talent->count() }}
                        </td>
                        <td>
                            {{ $label->trainee->count() }}
                        </td>
                        <td>
                            30/11/2020
                        </td>

                        <td>
                            
                        </td>
                        <td class="text-right">
                            <div class="btn-group">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('label.destroy', $label->id) }}" method="POST">
                                <a href="/detail-label" class="btn btn-xs btn-outline btn-primary">View</i> </a>
                                <a href="{{ route('label.edit', $label->id) }}" class="btn btn-xs btn-outline btn-primary">Edit</i> </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-outline btn-danger">Delete</a>   
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center text-mute" colspan="4">Data Album tidak tersedia</td>
                    </tr>
                    @endforelse
                    </tbody>

@endsection