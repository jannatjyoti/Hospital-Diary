@extends('fn.partials.master')
@section('title','Service')
@section('contents')
<div class="main-container section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                <aside>
                    <div class="widget categories">
                        <h4 class="widget-title">All Services</h4>
                        <ul class="categories-list">
                            @foreach ($services as $item)
                            <li>
                                <a href="#">
                                    <i class="lni-control-panel"></i>
                                    {{ $item->service_name }} <span
                                        class="category-counter">({{ $item->total() }})</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Advertisement</h4>
                        <div class="add-box">
                            <img class="img-fluid" src="{{ asset('fn/img/img1.jpg') }}" alt="">
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-md-12 col-xs-12 page-content">

                <div class="adds-wrapper">
                    <div class="tab-content">
                        <div id="list-view" class="tab-pane fade active show">
                            <div class="row">
                                @foreach ($service->service_details as $item)
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="featured-box">
                                        <figure>
                                            <span class="price-save">
                                                {{ $service->service_name }}
                                            </span>
                                            <a href=""><img class="img-fluid"
                                                    src="{{ asset('fn/img/featured/img-1.jpg') }}" alt=""
                                                    style="height: 220px; width: 400px"></a>
                                        </figure>
                                        <div class="feature-content" style="height: 220px; width: 400px">
                                            <div class="product">
                                                <a>{{ $service->service_name }} > </a>
                                            </div>
                                            <h4><a>{{ $item->hospital->hospital_name }}</a>
                                            </h4>
                                            <div class="meta-tag">
                                                <h6>
                                                    <a><i class="lni-cloud"></i> Total:
                                                        {{ $item->total }}</a>
                                                </h6>
                                                <h6>
                                                    <a><i class="lni-cloud-sync"></i> Running:
                                                        {{ $item->running }}</a>
                                                </h6>
                                                <h6>
                                                    <a><i class="lni-cloud-check"></i> Available:
                                                        {{ $item->available() }}</a>
                                                </h6>
                                            </div>
                                            <div class="listing-bottom">
                                                <p class="float-left">
                                                    <a href="#"><i class="lni-home"></i>
                                                        {{ $item->hospital->address }}</a>
                                                </p>
                                                <a data-toggle="modal" data-target="#serviceModal{{ $item->id }}"
                                                    href="" class="btn btn-common float-right">View
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
    </div>
</div>

<!-- Service Modal -->
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
<!-- END Service Modal -->

@endsection