@extends('fn.partials.master')
@section('title','Hospital info')
@section('contents')

<section class="services section-padding">
    <div class="container">
        <h3 class="section-title">Services</h3>
        <div class="row">
            @foreach ($hospital->service_details as $item)
            @if ($item->services != null)
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon">
                        <i class="lni-book"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">{{ $item->services->service_name }} </a></h3>
                        <p>Total: <b>{{ $item->total }}</b></p>
                        <p>Running: <b>{{ $item->running }}</b></p>
                        <p>Available: <b>{{ $item->available() }}</b></p>
                    </div>
                </div>
            </div>
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
                    @foreach ($hospital->doctors as $item)
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
@foreach ($hospital->doctors as $item)
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
                    <p><i class="lni-certificate"></i>Designation: <b>{{ $item->designation }}</b></p>
                    <a><i class="lni-map-marker"></i>Hospital: <b>{{ $item->hospital->hospital_name }}</b></a>
                    <p><i class="lni-alarm-clock"></i>Chember Time: <b>{{ $item->chamber_time }}</b></p>
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
@endsection