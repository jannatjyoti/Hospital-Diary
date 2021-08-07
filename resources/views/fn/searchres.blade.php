@extends('fn.partials.master')
@section('title','Index')
@section('contents')


<section class="services section-padding">
    <div class="container">
        <h3 class="section-title">Services</h3>
        <div class="row">
            @foreach ($results as $item)
            @if ($item->service_details->isNotEmpty())
            @foreach ($item->service_details as $details)
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon">
                        <i class="lni-book"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">{{ $item->service_name }} | {{ $details->hospital->hospital_name }}</a></h3>
                        <p>Total: <b>{{ $details->total }}</b></p>
                        <p>Running: <b>{{ $details->running }}</b></p>
                        <p>Available: <b>{{ $details->available() }}</b></p>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon">
                        <i class="lni-book"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">{{ $item->service_name }}</a></h3>
                        <p>Total: <b>0</b></p>
                        <p>Running: <b>0</b></p>
                        <p>Available: <b>0</b></p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

            <!-- <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
                    <div class="icon">
                        <i class="lni-leaf"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Clean & Modern Design</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis
                            repellat rerum assumenda facere.</p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>


<section class="featured-lis section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title">Hospitals</h3>
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


<section class="services section-padding">
    <div class="container">
        <h3 class="section-title">Doctors</h3>
        <div class="col-lg-12 col-md-12 col-xs-12 page-content">
            <div class="adds-wrapper">
                <div class="tab-content">
                    <div id="grid-view" class="tab-pane fade active show">
                        <div class="row">
                            @foreach ($doctors as $item)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="featured-box">
                                    <figure>
                                        <a href="#"><img class="img-fluid"
                                                src="{{ asset('fn/img/hospitals/doc01.jpg') }}" alt=""></a>
                                    </figure>
                                    <div class="feature-content col-12">
                                        <h4><a href="ads-details.html">{{ $item->doctor_Name }}</a></h4>
                                        <div class="meta-tag">
                                            <span>
                                                <a href=""><i class="lni-licencse"></i> {{ $item->designation }}</a>
                                            </span>
                                            <span>
                                                <a href="#"><i class="lni-clipboard"></i> {{ $item->specialized }}</a>
                                            </span>
                                            <span>
                                                <a href=""><i class="lni-licencse"></i> {{ $item->degree }}</a>
                                            </span>
                                        </div>
                                        <p class="dsc"><i class="lni-world"></i> {{ $item->hospital->hospital_name }}
                                        </p>
                                        <div class="listing-bottom">
                                            <a href="ads-details.html" class="btn btn-common float-right">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection