@extends('layouts.main')

@section('container')

<section id="albums" class="gray-section team">
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
                                        <div class="image">
                                            <img src="{{ asset('img/hotsauce.jpg') }}" alt="" class="img-responsive" style="width: auto; height: 195px;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="image-imitation">
                                        <div class="image">
                                            <img src="{{ asset('img/hotsauce1.jpg') }}" alt="" class="img-responsive" style="width: auto; height: 195px;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="image-imitation">
                                        <div class="image">
                                            <img src="{{ asset('img/hotsauce2.jpg') }}" alt="" class="img-responsive" style="width: auto; height: 195px;">
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                    {{ $album->title  }}
                                    </h2>
                                    <small>{{ $album->description}}</small>
                                    <hr>

                                    <h4>Product description</h4>

                                    <div class="small text-muted">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is

                                        <br/>
                                        <br/>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </div>
                                    <dl class="large m-t-md">
                                        <dt>Release Date</dt>
                                        <dd>dd/mm/yy</dd>
                                        <dt>Talent</dt>
                                        <dd>{{ $album->talent->talent_name }}</dd>
                                        <dt>Song List</dt>
                                        <dd>- 
                                            -
                                        </dd>
                                        <dt>Version</dt>
                                        <dd>-
                                            -
                                        </dd>
        
                                    </dl>
                                    <hr>

                                    <div>
                                        <div class="btn-group">
                                            <a href="/albums" class="btn btn-outline btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back to list album</a>
                                            <a href="/albums" class="btn btn-outline btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Check for shop</a>
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
</div>
@endsection
