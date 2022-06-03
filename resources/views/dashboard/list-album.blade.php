@extends('dashboard.main')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight ecommerce">


    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <button type="button" class="btn btn-w-m btn-primary">Add Album</button>
        </div>
    </div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">

                <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                    <thead>
                    <tr>

                        <th>Album ID</th>
                        <th data-hide="phone">Album Name</th>
                        <th data-hide="phone">Artist</th>
                        <th data-hide="phone">Agency</th>
                        <th data-hide="phone">Release Date</th>
                        <th data-hide="phone">Total Version</th>
                        <th></th>
                        <th class="text-right"> Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                           1001
                        </td>
                        <td>
                            Border: Day One
                        </td>
                        <td>
                            ENHYPEN
                        </td>
                        <td>
                            Belift Lab
                        </td>
                        <td>
                            30/11/2020
                        </td>
                        <td>
                            Mini Album
                        </td>
                        <td>
                            
                        </td>
                        <td class="text-right">
                            <div class="btn-group">
                                <a href="/detail-album" class="btn btn-xs btn-outline btn-primary">View</i> </a>
                                <a href="/form-album" class="btn btn-xs btn-outline btn-primary">Edit</i> </a>
                                <a href="/" class="btn btn-xs btn-outline btn-danger">Delete</a>   
                            </div>
                        </td>
                    </tr>

@endsection