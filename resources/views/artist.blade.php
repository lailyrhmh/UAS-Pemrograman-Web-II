@extends('layouts.main')

@section('container')
<section id="albums" class="gray-section team">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>The Artist: {{ $artist }}</h1>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>

            <div class="row">
                @foreach ($albums as $album)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
    
                                <div class="product-imitation">
                                    [ INFO ]
                                </div>
                                <div class="product-desc">
                                    <span class="product-price">
                                        $10
                                    </span>
                                    <a href="/albums/{{ $album->slug }}" class="product-name">  {{ $album->album_name  }}</a>
    
    
    
                                    <div class="small m-t-xs">
                                        <a href="/artists/{{ $album->artist->slug }}" class="text-muted">{{ $album->artist->artist_name }}</a>
                                    </div>
                                    <div class="m-t text-righ">
    
                                        <a href="/albums/{{ $album->slug }}" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>
@endsection