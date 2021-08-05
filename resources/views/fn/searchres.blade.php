@extends('fn.partials.master')
@section('title','Index')
@section('contents')


<section class="services section-padding">
    <div class="container">
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


@endsection