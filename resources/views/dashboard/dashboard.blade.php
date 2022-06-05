@extends('dashboard.main')

@section('content')
    <div class="col-lg-4 m-b-lg">
        <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
            <div class="vertical-timeline-block">
                <div class="vertical-timeline-icon navy-bg">
                    <i class="fa fa-briefcase"></i>
                </div>

                <div class="vertical-timeline-content">
                    <h2>Meeting</h2>
                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in
                        marketing and products. Below please find the current status of the sale.
                    </p>
                    <a href="#" class="btn btn-sm btn-primary"> More info</a>
                    <span class="vertical-date">
                        Today <br>
                        <small>Dec 24</small>
                    </span>
                </div>
            </div>

            <div class="vertical-timeline-block">
                <div class="vertical-timeline-icon blue-bg">
                    <i class="fa fa-file-text"></i>
                </div>

                <div class="vertical-timeline-block">
                    <div class="vertical-timeline-icon lazur-bg">
                        <i class="fa fa-coffee"></i>
                    </div>

                    <div class="vertical-timeline-content">
                        <h2>Coffee Break</h2>
                        <p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's. </p>
                        <a href="#" class="btn btn-sm btn-info">Read more</a>
                        <span class="vertical-date"> Yesterday <br><small>Dec 23</small></span>
                    </div>
                </div>



            </div>

        </div>

    </div>
@endsection
