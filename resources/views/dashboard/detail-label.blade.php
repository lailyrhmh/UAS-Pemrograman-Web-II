@extends('dashboard.main')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">

            <div class="ibox product-detail">
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-5">


                            <div class="product-images">

                                <div>
                                    <div class="image-imitation">
                                        [IMAGE 1]
                                    </div>
                                </div>
                                <div>
                                    <div class="image-imitation">
                                        [IMAGE 2]
                                    </div>
                                </div>
                                <div>
                                    <div class="image-imitation">
                                        [IMAGE 3]
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-7">

                            <h1 class="font-bold m-b-xs">
                                LABEL NAME
                            </h1>
                            <h3>LABEL BRANCH</h3>
                            <hr>

                            <h4>Label Description</h4>

                            <div class="medium text-muted">
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is

                                <br/>
                                <br/>
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable.
                            </div>
                            <dl class="large m-t-md">
                                <dt>Established Date</dt>
                                <dd>dd/mm/yy</dd>
                            </dl>
                            <hr>

                            <div>
                                <div class="btn-group">
                                    <a href="/form-label" class="btn btn-l btn-outline btn-primary">Edit</i> </a>
                                    <a href="/" class="btn btn-l btn-outline btn-danger">Delete</a>   
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
                <div class="ibox-footer">
                    <span class="float-right">
                        Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                    </span>
                    The generated Lorem Ipsum is therefore always free
                </div>
            </div>

        </div>
    </div>

@endsection