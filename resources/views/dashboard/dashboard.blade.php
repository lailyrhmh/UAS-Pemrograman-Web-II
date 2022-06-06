@extends('dashboard.main')

@section('content')
<div class ="row m-b-lg">
    <div class="col-lg-4 m-b-lg">
        <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
            <div class="vertical-timeline-block">
                <div class="vertical-timeline-icon navy-bg">
                    <i class="fa fa-dot-circle-o"></i>
                </div>

                <div class="vertical-timeline-content">
                    <h2>Album</h2>
                    <p>Here are all albums in total
                    </p>
                    <a href="#" class="btn btn-sm btn-primary"></i> More info</a>
                    <span class="vertical-date">
                    </span>
                </div>
            </div>

            <div class="vertical-timeline-block">
                <div class="vertical-timeline-icon blue-bg">
                    <i class="fa fa-file-text"></i>
                </div>

                <div class="vertical-timeline-block">
                    <div class="vertical-timeline-icon lazur-bg">
                        <i class="fa fa-vcard-o"></i>
                    </div>

                    <div class="vertical-timeline-content">
                        <h2>Staff</h2>
                        <p>Here are all staffs in total</p>
                        <a href="#" class="btn btn-sm btn-info">More info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 m-b-lg">
        <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
            <div class="vertical-timeline-block">
                <div class="vertical-timeline-icon navy-bg">
                    <i class="fa fa-group"></i>
                </div>
    
                <div class="vertical-timeline-content">
                    <h2>Talent</h2>
                    <p>Here are all talents in total
                    </p>
                    <a href="#" class="btn btn-sm btn-primary"></i> More info</a>
                    <span class="vertical-date">
                    </span>
                </div>
            </div>
    
            <div class="vertical-timeline-block">
                <div class="vertical-timeline-icon blue-bg">
                    <i class="fa fa-file-text"></i>
                </div>
    
                <div class="vertical-timeline-block">
                    <div class="vertical-timeline-icon lazur-bg">
                        <i class="fa fa-user"></i>
                    </div>
    
                    <div class="vertical-timeline-content">
                        <h2>Trainee</h2>
                        <p>Here are all trainees in total</p>
                        <a href="#" class="btn btn-sm btn-info">More info</a>
                    </div>
                </div>
            </div>
        </div>
</div> 




@endsection
