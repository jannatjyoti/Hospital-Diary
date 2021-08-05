@extends('fn.partials.master')
@section('title','Index')
@section('contents')

<section id="categories">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-xs-12">
                <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">
                    @foreach ($services as $item)
                    <div class="item" style="height: 115px">
                        <a href="{{ url("service/$item->id") }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('fn/img/category/img-2.png') }}" alt="">
                                    </div>
                                    <h4>{{ $item->service_name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


<section class="featured-lis section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title">Registered Hospitals</h3>
                <div id="new-products" class="owl-carousel owl-theme">
                    @foreach ($hospitals as $item)
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" src="{{ asset('fn/img/hospitals/hos01.jpg') }}" alt="">
                                <div class="overlay">
                                    <!--<div>
                                        <a class="btn btn-common" href="ads-details.html">View Details</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="">{{ $item->hospital_name }}</a></h3>
                                <span>{{ $item->contact_no }}</span>
                                <div class="icon">
                                    <span><i class="lni-world"></i></span>
                                    <!-- <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span> -->
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i>
                                            {{ $item->address }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="works section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">How It Works?</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-users"></i>
                    </div>
                    <p>Create an Account</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-bookmark-alt"></i>
                    </div>
                    <p>Search for Info</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-thumbs-up"></i>
                    </div>
                    <p>Deal Done</p>
                </div>
            </div>
            <hr class="works-line">
        </div>
    </div>
</section>


<section class="services bg-light section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Key Features</h3>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon">
                        <i class="lni-leaf"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Elegant Design</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
                    <div class="icon">
                        <i class="lni-display"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Responsive Design</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                    <div class="icon">
                        <i class="lni-color-pallet"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Clean UI</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection