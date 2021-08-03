<header id="header-wrap">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-5 col-xs-12">
                    <ul class="list-inline">
                        <li><i class="lni-phone"></i> +0123 456 789</li>
                        <li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="fb888e8b8b94898fbb9c969a9297d5989496">[email&#160;protected]</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-7 col-xs-12">
                    <div class="roof-social float-right">
                        <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                        <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                        <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                        <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                        <a class="google" href="#"><i class="lni-google-plus"></i></a>
                    </div>
                    <div class="header-top-right float-right">
                        <a href="{{ route('auth.admin_login') }}" class="header-top-button"><i class="lni-lock"></i> Log
                            In</a> |
                        <a href="{{ route('auth.admin_register') }}" class="header-top-button"><i
                                class="lni-pencil"></i> Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                    aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                </button>
                <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('Image/logo.png') }}"
                        style="height: 50px" alt="Hospital Diary"></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">
                            Categories
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            @if(session()->has('services'))
                            @foreach (session('services') as $item)
                            <a class="dropdown-item" href="{{ url("service/$item->id") }}">{{ $item->service_name }}</a>
                            @endforeach
                            @endif
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about.html">About Us</a>
                            <a class="dropdown-item" href="services.html">Services</a>
                            <a class="dropdown-item" href="ads-details.html">Ads Details</a>
                            <a class="dropdown-item" href="post-ads.html">Ads Post</a>
                            <a class="dropdown-item" href="pricing.html">Packages</a>
                            <a class="dropdown-item" href="testimonial.html">Testimonial</a>
                            <a class="dropdown-item" href="faq.html">FAQ</a>
                            <a class="dropdown-item" href="404.html">404</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">
                            Contact
                        </a>
                    </li>
                </ul>

                <div class="post-btn">
                    <a class="btn btn-common" href=""><i class="lni-pencil-alt"></i> Post an Ad</a>
                </div>
            </div>
        </div>

        <ul class="mobile-menu">
            <li>
                <a class="active" href="">
                    Home
                </a>
            </li>
            <li>
                <a href="category.html">Categories</a>
            </li>
            <li>
                <a href="#">
                    Services
                </a>
                <ul class="dropdown">
                    @if(session()->has('services'))
                    @foreach (session('services') as $item)
                    <li><a class="dropdown-item" href="{{ url("service/$item->id") }}">{{ $item->service_name }}</a>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </li>
            <li>
                <a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="post-ads.html">Ads Post</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="404.html">404</a></li>
                </ul>
            </li>

            <li>
                <a href="contact.html">Contact Us</a>
            </li>
        </ul>

    </nav>


    <div id="hero-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                    <div class="contents">
                        <h1 class="head-title">Welcome to The Largest <span class="year">Medical Diary</span></h1>
                        <p>Buy and sell everything from used cars to mobile phones and computers, or search for
                            property, jobs and more</p>
                        <div class="search-bar">
                            <div class="search-inner">
                                <form class="search-form">
                                    <div class="form-group">
                                        <input type="text" name="customword" class="form-control"
                                            placeholder="What are you looking for?">
                                    </div>
                                    <button class="btn btn-common" type="button"><i class="lni-search"></i> Search
                                        Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>