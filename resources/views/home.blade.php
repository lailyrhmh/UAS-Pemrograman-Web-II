@extends('layouts.main')

@section('container')
    <div id="inSlider" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#inSlider" data-slide-to="0" class="active"></li>
            <li data-target="#inSlider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>We strive for based on music.<br/>
                            the world's best<br/>
                            entertainment lifestyle <br/>
                            platform company we are GD+ studio</h1>
                        </p>
                    </div>
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back one"></div>
    
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption blank">
                        <h1>we are committed to satisfying <br/>
                            our customers <br/> 
                            by continuously improving our<br/>
                            services with the highest standards.</h1>
                    </div>
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back two"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#inSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#inSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>ABOUT US</h1>
                    <p>Hilmiyah - Neysa - Laily</p>
                </div>
            </div>
            <div class="row m-b-lg justify-content-center">
                <div class="col-lg-3 ">
                    <address>
                        <strong><span class="navy">Kelompok 2 PEMWEB 2</span></strong><br/>
                        795 Folsom Ave, Suite 600<br/>
                        San Francisco, CA 94107<br/>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
                <div class="col-lg-4">
                    <p class="text-color">
                        This website was created to fulfill the final exam of web programming semester II using the laravel framework (https://laravel.com/) as well as the boostrap template from inspinia (https://wrapbootstrap.com/theme/inspinia-responsive-admin-template-WB0R5L90S)
                    </p>
                </div>
            </div>
            
    </section>
@endsection