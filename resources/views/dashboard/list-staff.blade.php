@extends('dashboard.main')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <button type="button" class="btn btn-w-m btn-primary">Add Talent</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="contact-box center-version">

                <a href="profile.html">

                    <img alt="image" class="rounded-circle" src="img/a2.jpg">


                    <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                    <div class="font-bold">Art Directorr</div>
                    <address class="m-t-md">
                        <strong>BELIFT LAB</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>

                </a>
                <div class="contact-box-footer">
                    <div class="m-t-xs btn-group">
                        <a href="/detail-staff"  class="btn btn-xs btn-primary"></i> View </a>
                        <a href="/form-staff"  class="btn btn-xs btn-primary"></i> Edit</a>
                        <a href=""  class="btn btn-xs btn-danger"></i> Delete</a>
                    </div>
                </div>
            </div>
        </div>
 @endsection