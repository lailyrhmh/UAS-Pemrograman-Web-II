@extends('dashboard.main')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight ecommerce">


    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-form-label" for="order_id">Album ID</label>
                    <input type="text" id="order_id" name="order_id" value="" placeholder="Album ID" class="form-control">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-form-label" for="status">Album Name</label>
                    <input type="text" id="status" name="status" value="" placeholder="Title" class="form-control">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-form-label" for="customer">Artist</label>
                    <input type="text" id="customer" name="customer" value="" placeholder="Artist" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-form-label" for="date_added">Date Released</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_added" type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-form-label" for="date_modified">Version</label>
                    <input type="text" id="customer" name="customer" value="" placeholder="Version" class="form-control">
                </div>
            </div>
           
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
                        <th data-hide="phone">Version</th>
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
                                <a href="/albumform" class="btn btn-xs btn-outline btn-primary">Edit</i> </a>
                                <a href="/" class="btn btn-xs btn-outline btn-danger">Delete</a>   
                            </div>
                        </td>
                    </tr>

@endsection