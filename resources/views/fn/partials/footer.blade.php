<section class="counter-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 work-counter-widget">
                <div class="counter">
                    <div class="icon"><i class="lni-map"></i></div>
                    <h2 class="counterUp">{{ $total_admin }}</h2>
                    <p>Hospitals</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 work-counter-widget">
                <div class="counter">
                    <div class="icon"><i class="lni-users"></i></div>
                    <h2 class="counterUp">5487</h2>
                    <p>Members</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 work-counter-widget">
                <div class="counter">
                    <div class="icon"><i class="lni-layers"></i></div>
                    <h2 class="counterUp">{{ count($services) }}</h2>
                    <p>Services</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 work-counter-widget">
                <div class="counter">
                    <div class="icon"><i class="lni-briefcase"></i></div>
                    <h2 class="counterUp">150</h2>
                    <p>Medical Tests</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cta section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="single-cta">
                    <div class="cta-icon">
                        <i class="lni-grid"></i>
                    </div>
                    <div class="content">
                        <h4>Refreshing Design</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="single-cta">
                    <div class="cta-icon">
                        <i class="lni-brush"></i>
                    </div>
                    <div class="content">
                        <h4>Easy to Find Services</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="single-cta">
                    <div class="cta-icon">
                        <i class="lni-headphone-alt"></i>
                    </div>
                    <div class="content">
                        <h4>24/7 Support</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <div class="footer-logo"><img style="width: 300px; height: 100px"
                                src="{{ asset('Image/logo.png') }}"></div>
                        <div class="textwidget">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur,
                                adipisci velit.</p>
                        </div>
                        <ul class="mt-3 footer-social">
                            <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Quick Link</h3>
                        <ul class="menu">
                            <li><a href="{{ route('about') }}">- About Us</a></li>
                            <li><a href="#">- Services</a></li>
                            <li><a href="{{ route('contact') }}">- Contact Us</a></li>
                            <li><a href="#">- FAQ's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Contact Info</h3>
                        <ul class="contact-footer">
                            <li>
                                <strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444
                                    66647</span>
                            </li>
                            <li>
                                <strong><i class="lni-envelope"></i></strong><span><a
                                        href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="9efdf1f0eafffdeadef3fff7f2b0fdf1f3">[email&#160;protected]</a>
                                    <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="e4979194948b9690a489858d88ca878b89">[email&#160;protected]</a></span>
                            </li>
                            <li>
                                <strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St Vincent Place,
                                        Glasgow, DC 45 <br>Fr 45</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p><a target="_blank" href="{{ url('/') }}">Medical Diary - {{ now()->year }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>