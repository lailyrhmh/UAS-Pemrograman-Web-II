@extends('dashboard.main')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight ecommerce">


    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <button type="button" class="btn btn-w-m btn-primary">Add Label</button>
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
                        <th data-hide="phone">Established Date</th>
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
                            BELIFT LAB
                        </td>
                        <td>
                            Music
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            30/11/2020
                        </td>

                        <td>
                            
                        </td>
                        <td class="text-right">
                            <div class="btn-group">
                                <a href="/detail-label" class="btn btn-xs btn-outline btn-primary">View</i> </a>
                                <a href="/form-label" class="btn btn-xs btn-outline btn-primary">Edit</i> </a>
                                <a href="/" class="btn btn-xs btn-outline btn-danger">Delete</a>   
                            </div>
                        </td>
                    </tr>

@endsection