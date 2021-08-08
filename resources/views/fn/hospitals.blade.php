@extends('fn.partials.master')
@section('title','Doctors')
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
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <div class="row">
                    @foreach ($hospitals as $item)

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="featured-box">
                            <figure>
                                <a href="#"><img class="img-fluid" src="{{ asset('fn/img/hospitals/hos01.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <div class="feature-content col-12">

                                <h4><a href="ads-details.html">{{ $item->hospital_name }}</a></h4>
                                <div class="meta-tag">
                                    <span>
                                        <a href="#"><i class="lni-user"></i> {{ $item->contact_no }}</a>
                                    </span>
                                    <span>
                                        <a href="#"><i class="lni-tag"></i> {{ $item->hospital_code }}</a>
                                    </span>
                                </div>
                                <p class="dsc"><i class="lni-map-marker"></i> {{ $item->address }}</p>
                                <div class="listing-bottom">
                                    <a href="{{ url("hospital/$item->id") }}" class="btn btn-common float-right">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $hospitals->links() }}
            </div>
        </div>
    </div>
</div>
</div>

@endsection