@extends('fn.partials.master')
@section('title','Index')
@section('contents')

@if ($results->isNotEmpty())
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
                        <p>Available: <b>{{ $details->available() }}</b></p>
                        <p>Address: <b>{{ $details->hospital->address }}</b></p>
                    </div>
                    <a data-toggle="modal" data-target="#serviceModal{{ $item->id }}" href=""
                        class="btn btn-common float-right">View
                        Details</a>
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
        </div>
    </div>
</section>

<!-- Service Modal -->
@foreach ($services as $service)
@foreach ($service->service_details as $item)
<div class="modal fade" id="serviceModal{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Service Details
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="product-content">
                    <h4>{{ $service->service_name }} <i class="lni-cog"></i></h4>

                    <p><i class="lni-cloud"></i>Total: <b>{{ $item->total }}</b></p>
                    <p><i class="lni-cloud-sync"></i>Running: <b>{{ $item->running }}</b></p>
                    <p><i class="lni-cloud-check"></i>Available: <b>{{ $item->available() }}</b></p>
                    <a><i class="lni-home"></i>Hospital: <b>{{ $item->hospital->hospital_name }}</b></a>
                    <p><i class="lni-map-marker"></i>Address: <b>{{ $item->hospital->address }}</b></p>
                    <p><i class="lni-phone"></i>Contact: <b>{{ $item->hospital->contact_no }}</b></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-common" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach
<!-- END Service Modal -->
@endif

@if ($hospitals->isNotEmpty())
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
                                <img class="img-fluid" src="{{ asset($item->image_url) }}" alt=""
                                    style="height: 220px; width: 400px">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="{{ url("hospital/$item->id") }}">View
                                            Details</a>
                                    </div>
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
@endif

@if ($doctors->isNotEmpty())
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
                                        <a href=""><img class="img-fluid" src="{{ asset($item->image_url) }}"
                                                style="height: 220px; width: 400px">
                                        </a>
                                    </figure>
                                    <div class="feature-content col-12">
                                        <h4><a href="">{{ $item->doctor_Name }}</a></h4>
                                        <div class="meta-tag">
                                            <span>
                                                <a href=""><i class="lni-licencse"></i> {{ $item->designation }}</a>
                                            </span>
                                            <span>
                                                <a href=""><i class="lni-clipboard"></i> {{ $item->specialized }}</a>
                                            </span>
                                            <span>
                                                <a href=""><i class="lni-licencse"></i> {{ $item->degree }}</a>
                                            </span>
                                        </div>
                                        <p class="dsc"><i class="lni-world"></i> {{ $item->hospital->hospital_name }}
                                        </p>
                                        <div class="listing-bottom">
                                            <a href="" data-toggle="modal" data-target="#drModal{{ $item->id }}"
                                                class="btn btn-common float-right">View
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
@endif

@endsection