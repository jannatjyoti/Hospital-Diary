@extends('fn.partials.master')
@section('title','Doctors')
@section('contents')
<div class="main-container section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                <aside>
                    {{--<div class="widget_search">
                        <form role="search" id="search-form">
                            <input type="search" class="form-control" autocomplete="off" name="s"
                                placeholder="Search..." id="search-input" value="">
                            <button type="submit" id="search-submit" class="search-btn"><i
                                    class="lni-search"></i></button>
                        </form>
                    </div>--}}

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

                {{--<div class="product-filter">
                    <div class="short-name">
                        <span>Showing (1 - 12 products of 7371 products)</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
                        </li>
                    </ul>
                </div> --}}

                <div class="adds-wrapper">
                    <div class="tab-content">
                        <div id="list-view" class="tab-pane fade active show">
                            <div class="row">
                                @foreach ($doctors as $item)
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="featured-box">
                                        <figure>
                                            <span class="price-save">
                                                {{ $item->doctor_Name }}
                                            </span>

                                            <a href="#"><img class="img-fluid"
                                                    src="{{ asset('fn/img/hospitals/doc01.jpg') }}" alt=""></a>
                                        </figure>
                                        <div class="feature-content">
                                            <div class="product">
                                                <a href="">{{ $item->hospital->hospital_name }} <i class="lni-home"></i>
                                                </a>
                                            </div>
                                            <h4><a href="ads-details.html">{{ $item->doctor_Name }}</a></h4>
                                            <div class="meta-tag">
                                                <span>
                                                    <a href="#"><i class="lni-licencse"></i> {{ $item->designation }}
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#"><i class="lni-graduation"></i>{{ $item->degree }}
                                                    </a>
                                                </span>

                                            </div>
                                            <p class="dsc">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry.</p>
                                            <div class="listing-bottom">
                                                <p class="float-left">
                                                    <a href="#"><i class="lni-clipboard"></i>
                                                        {{ $item->specialized }}</a>
                                                </p>
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

                {{ $doctors->links() }}
                <!--<div class="pagination-bar">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div> -->

            </div>
        </div>
    </div>
</div>

@endsection