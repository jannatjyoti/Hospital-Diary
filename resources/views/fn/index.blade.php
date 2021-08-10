@extends('fn.partials.master')
@section('title','Index')
@section('contents')

<!-- Categories -->
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


<!-- Hospitals -->
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
                                    <div>
                                        <a class="btn btn-common" href="{{ url("hospital/$item->id") }}">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a>{{ $item->hospital_name }}</a></h3>
                                <span><i class="lni-phone"></i> {{ $item->contact_no }}</span>
                                <div class="icon">
                                    <span><i class="lni-world"></i></span>
                                    <!-- <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span> -->
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <a class="address"><i class="lni-map-marker"></i>
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

<!-- Doctors -->
<section class="featured-lis section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title">Doctors</h3>
                <div id="doctors" class="owl-carousel owl-theme">
                    @foreach ($doctors as $item)
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" src="{{ asset('fn/img/hospitals/doc01.jpg') }}" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" data-toggle="modal"
                                            data-target="#drModal{{ $item->id }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a>{{ $item->doctor_Name }}</a></h3>
                                <span><i class="lni-clipboard"></i> {{ $item->specialized }}</span>
                                <div class="icon">
                                    <span><i class="lni-user"></i></span>
                                    <!-- <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span> -->
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <a class="address"><i class="lni-map-marker"></i>
                                            {{ $item->hospital->hospital_name }}</a>
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
<!-- Doctor Modal -->
@foreach ($doctors as $item)
<div class="modal fade" id="drModal{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Doctor Details
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="product-content">
                    <h5><b>{{ $item->doctor_Name }}</b> <i class="lni-user"></i></h5>

                    <p><i class="lni-clipboard"></i>Specialization: <b>{{ $item->specialized }}</b>
                    </p>
                    <p><i class="lni-graduation"></i>Degree: <b>{{ $item->degree }}</b></p>
                    <p><i class="lni-map-marker"></i>Designation: <b>{{ $item->designation }}</b></p>
                    <a><i class="lni-map-marker"></i>Hospital: <b>{{ $item->hospital->hospital_name }}</b></a>
                    <p><i class="lni-clock"></i>Chember Time: <b>{{ $item->chamber_time }}</b></p>
                    <p><i class="lni-home"></i>Room No: <b>{{ $item->room_no }}</b></p>
                    <p><i class="lni-phone"></i>Contact: <b>{{ $item->number }}</b></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-common" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- END Doctor Modal -->


<!-- How it works -->
{{-- <section class="works section-padding">
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

<!-- Key features -->
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
</section> --}}

@endsection