@extends('fn.partials.master')
@section('title','Doctors')
@section('contents')
<div class="main-container section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                <aside>
                    @php
                    $designation = ['Intern','Professor','Asst. Professor','Associate Professor'];
                    $specialized = ['Medicine','Kidney','Neuromedicine','Gestoentrology','E & T'];
                    @endphp
                    <div class="widget categories">
                        <h4 class="widget-title">Specialised</h4>
                        <ul class="categories-list">
                            @foreach ($specialized as $item)
                            <li>
                                <a href="">
                                    <i class="lni-control-panel"></i>
                                    {{ $item }} <span class="category-counter">({{ session($item) }})</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget categories">
                        <h4 class="widget-title">Designation</h4>
                        <ul class="categories-list">
                            @foreach ($designation as $item)
                            <li>
                                <a href="">
                                    <i class="lni-control-panel"></i>
                                    {{ $item }} <span class="category-counter">({{ session($item) }})</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-md-12 col-xs-12 page-content">

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

                                            <a href=""><img class="img-fluid" src="{{ asset($item->image_url) }}" alt=""
                                                    style="height: 220px; width: 400px"></a>
                                        </figure>
                                        <div class="feature-content">
                                            <div class="product">
                                                <a href="">{{ $item->hospital->hospital_name }} <i class="lni-home"></i>
                                                </a>
                                            </div>
                                            <h4><a href="">{{ $item->doctor_Name }}</a></h4>
                                            <div class="meta-tag">
                                                <span>
                                                    <a href=""><i class="lni-licencse"></i> {{ $item->designation }}
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href=""><i class="lni-graduation"></i>{{ $item->degree }}
                                                    </a>
                                                </span>

                                            </div>
                                            <p class="dsc">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry.</p>
                                            <div class="listing-bottom">
                                                <p class="float-left">
                                                    <a href=""><i class="lni-clipboard"></i>
                                                        {{ $item->specialized }}</a>
                                                </p>
                                                <a data-toggle="modal" data-target="#drModal{{ $item->id }}" href=""
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

                {{ $doctors->links() }}

            </div>
        </div>
    </div>
</div>
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- END Doctor Modal -->
@endsection