@extends('fn.partials.master')
@section('title','Index')
@section('contents')

<section id="categories">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-xs-12">
                <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">
                    @foreach ($services as $item)
                    <div class="item" style="height: 40px">
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

                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('fn/img/category/img-6.png') }}" alt="">
                                    </div>
                                    <h4>Cloths</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('fn/img/category/img-1.png') }}" alt="">
                                    </div>
                                    <h4>Bicycle</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="featured-lis section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title">Featured Products</h3>
                <div id="new-products" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" src="{{ asset('fn/img/product/img1.jpg') }}" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="ads-details.html">View Details</a>
                                    </div>
                                </div>
                                <div class="btn-product bg-sale">
                                    <a href="#">Sale</a>
                                </div>
                                <span class="price">$999.00</span>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="ads-details.html">Macbook Pro 2020</a></h3>
                                <span>Electronic / Computers</span>
                                <div class="icon">
                                    <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span>
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <span class="icon-wrap">
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star"></i>
                                        </span>
                                        <span class="count-review">
                                            (12 Review)
                                        </span>
                                    </div>
                                    <div class="float-right">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" src="{{ asset('fn/img/product/img2.jpg') }}" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="ads-details.html">View Details</a>
                                    </div>
                                </div>
                                <span class="price">$269.00</span>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="ads-details.html">Nikon Camera</a></h3>
                                <span>Electronic / Camera</span>
                                <div class="icon">
                                    <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span>
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <span class="icon-wrap">
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                        </span>
                                        <span class="count-review">
                                            (2 Review)
                                        </span>
                                    </div>
                                    <div class="float-right">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> California</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" src="{{ asset('fn/img/product/img3.jpg') }}" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="ads-details.html">View Details</a>
                                    </div>
                                </div>
                                <div class="btn-product bg-slod">
                                    <a href="#">Sold</a>
                                </div>
                                <span class="price">$799.00</span>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="ads-details.html">iPhone X Refurbished</a></h3>
                                <span>Electronic / Phones</span>
                                <div class="icon">
                                    <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span>
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <span class="icon-wrap">
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star"></i>
                                        </span>
                                        <span class="count-review">
                                            (8 Review)
                                        </span>
                                    </div>
                                    <div class="float-right">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" src="{{ asset('fn/img/product/img4.jpg') }}" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="ads-details.html">View Details</a>
                                    </div>
                                </div>
                                <span class="price">$99.00</span>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="ads-details.html">Baby Toy</a></h3>
                                <span>Sports / Baby Toys</span>
                                <div class="icon">
                                    <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span>
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <span class="icon-wrap">
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star"></i>
                                        </span>
                                        <span class="count-review">
                                            (12 Review)
                                        </span>
                                    </div>
                                    <div class="float-right">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" src="{{ asset('fn/img/product/img5.jpg') }}" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="ads-details.html">View Details</a>
                                    </div>
                                </div>
                                <span class="price">$99.00</span>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="ads-details.html">Baby Toy</a></h3>
                                <span>Sports / Baby Toys</span>
                                <div class="icon">
                                    <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span>
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <span class="icon-wrap">
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star"></i>
                                        </span>
                                        <span class="count-review">
                                            (12 Review)
                                        </span>
                                    </div>
                                    <div class="float-right">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" src="{{ asset('fn/img/product/img6.jpg') }}" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="ads-details.html">View Details</a>
                                    </div>
                                </div>
                                <div class="btn-product bg-sale">
                                    <a href="#">Sale</a>
                                </div>
                                <span class="price">$99.00</span>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="ads-details.html">Baby Toy</a></h3>
                                <span>Sports / Baby Toys</span>
                                <div class="icon">
                                    <span><i class="lni-bookmark"></i></span>
                                    <span><i class="lni-heart"></i></span>
                                </div>
                                <div class="card-text">
                                    <div class="float-left">
                                        <span class="icon-wrap">
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star-filled"></i>
                                            <i class="lni-star"></i>
                                        </span>
                                        <span class="count-review">
                                            (12 Review)
                                        </span>
                                    </div>
                                    <div class="float-right">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <p>Post Free Ad</p>
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

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
                    <div class="icon">
                        <i class="lni-emoji-smile"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">UX Friendly</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1s">
                    <div class="icon">
                        <i class="lni-pencil-alt"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Easily Customizable</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                    <div class="icon">
                        <i class="lni-headphone-alt"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Security Support</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection