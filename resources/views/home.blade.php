@extends('layouts.main')

@section('title')
Home
@endsection

@section('contents')
    <div class="header-slider-one">
        <div class="header-area header-bg" style="background-image:url({{ asset('assets/img/header-slider/01.png') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-inner">
                            <!-- header inner -->
                            <h1 class="title">Swift Logistics Services</h1>
                            <div class="btn-wrapper  desktop-left padding-top-30">
                                <a href="{{ url('about') }}" class="boxed-btn">Learn More</a>
                                <a href="{{ url('contact') }}" class="boxed-btn blank">Contact Us</a>
                            </div>
                        </div>
                        <!-- //.header inner -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area header-bg" style="background-image:url({{ asset('assets/img/header-slider/02.png') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-inner">
                            <!-- header inner -->
                            <h1 class="title">World most Fastest secure delivery service </h1>
                            <div class="btn-wrapper  desktop-left padding-top-30">
                                <a href="{{ url('signup') }}" class="boxed-btn">Sign up</a>
                                <a href="{{ url('track-shipment') }}" class="boxed-btn blank">Track Shipment</a>
                            </div>
                        </div>
                        <!-- //.header inner -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area bg-image padding-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="left-content-area">
                        <div class="shipping-area">
                            <div class="section-title white">
                                <h4 class="title">Track your shipping</h4>
                                <p>* Please key the track id to get your shipping location</p>
                            </div>

                            <form method="post" action="{{ url('track-shipment') }}" class="shipping-form margin-top-60">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="tracking_id" class="form-control" placeholder="Enter track id">
                                </div>
                                <button type="submit" class="submit-btn">Track Now</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-12">
                    <div class="right-content-area">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="single-header-bottom-item white">
                                    <div class="icon">
                                        <i class="flaticon-time"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Connected</h4>
                                        <p>The shortest transit time between seaport, airport and industrial zones in the Gulf.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="single-header-bottom-item white">
                                    <div class="icon">
                                        <i class="flaticon-map-4"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Efficient</h4>
                                        <p>Swift Logistics Port is the most efficient port in the region, with a sub-3 hour turnaround.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="single-header-bottom-item white">
                                    <div class="icon">
                                        <i class="flaticon-booking"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">On time delivery
                                        </h4>
                                        <p>Treacherously far condescending invidiously menially and constitutionally into capriciously. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="single-header-bottom-item white">
                                    <div class="icon">
                                        <i class="flaticon-delivery-truck"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Fast
                                        </h4>
                                        <p>Swift Logistics Port offers the fastest customs clearance of any country in the GCC.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Provide Area -->
    <section class="our-provide-area padding-top-80 padding-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title b-top desktop-center padding-top-25 margin-bottom-55">
                        <h2 class="title">WE PROVIDE ALL LOGICTIC SERVICES
                        </h2>
                        <p>Swift Logistics is the logistics and transportation hub of the Southeast and your direct access to the world. With an extensive line-up of distribution and warehousing facilities, world-class supply chain infrastructure, and the nation’s fastest-growing port, Swift Logistics is ready to move your product efficiently and seamlessly.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-what-we-provide-item margin-bottom-30">
                        <div class="single-what-img">
                            <img src="{{ asset('assets/img/we-provide/01.png') }}" alt="">
                        </div>
                        <div class="content-wrapper">
                            <div class="icon">
                                <i class="flaticon-air-freight"></i>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Air Freight</h4>
                                </a>
                                <p>Swift Logistics partners with airlines and freight forwarders to offer seamless air freight solutions to clients globally. We offer a competitive and quick service which includes our air express, high priority (24 hours) delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-what-we-provide-item margin-bottom-30">
                        <div class="single-what-img">
                            <img src="{{ asset('assets/img/we-provide/02.png') }}" alt="">
                        </div>
                        <div class="content-wrapper">
                            <div class="icon">
                                <i class="flaticon-tracking"></i>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">road Freight</h4>
                                </a>
                                <p>We work close with strategic partners to ensure our domestic trucking offers clients everything they need. We utilize track and trace capabilities to keep customers informed on their shipments at all times.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-what-we-provide-item margin-bottom-30">
                        <div class="single-what-img">
                            <img src="{{ asset('assets/img/we-provide/03.png') }}" alt="">
                        </div>
                        <div class="content-wrapper">
                            <div class="icon">
                                <i class=" flaticon-box-4"></i>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Warehouse</h4>
                                </a>
                                <p>EFulfillment is on the rise more than ever. While many warehouses can do it, not many can do it right! We specialize in e-commerce work and have highly trained experience teams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top lawyer area end -->

    <!-- counter up area start -->
    <div class="counterup-area bg-image padding-top-110 padding-bottom-285" style="background-image: url({{ asset('assets/img/bg/03.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counterup-01">
                        <div class="content">
                            <div class="count-wrap"><span class="count-num">2,5007</span>+</div>
                            <h4 class="title">Successfully Delivered</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counterup-01">
                        <div class="content">
                            <div class="count-wrap"><span class="count-num">34,4771</span>+</div>
                            <h4 class="title">Worldwide Clients</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counterup-01">
                        <div class="content">
                            <div class="count-wrap"><span class="count-num">7,079</span>+</div>
                            <h4 class="title">Store Clients Products</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counterup-01">
                        <div class="content">
                            <div class="count-wrap"><span class="count-num">1043</span>+</div>
                            <h4 class="title">Total Km Reach So Far</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter up area end -->
    <!-- we offer  -->
    <section class="we-offer-area m-top padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="we-offer-content">
                        <div class="content">
                            <div class="section-title">
                                <h2 class="title">We offer best logistic provider for our clients</h2>
                                <p>If your 3PL or distribution center is seeking to grow, Swift Logistics is the place to be. When you choose Swift Logistics, you are choosing a solid foundation of air, land and sea transportation that will enhance your business growth and keep you competitive in the global marketplace.</p>
                            </div>
                            <div class="servicee-area">
                                <ul>
                                    <li><a href="#"><i class="fas fa-check-circle"></i>We provide the best logistic service for globally
                                        </a></li>
                                    <li><a href="#"><i class="fas fa-check-circle"></i>We know how to make it in time and set the right terms for deliveries.</a></li>
                                    <li><a href="#"><i class="fas fa-check-circle"></i>All payment methods are acceptable for ordering our services.
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="we-offer-img bg-image" style="background-image: url({{ asset('assets/img/we-offer/01.png') }});">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose us area start  -->
    <section class="why-choose-use-area bg-image padding-bottom-120" style="background-image: url({{ asset('assets/img/bg/04.png') }})">
        <div class="container">
            <div class="why-choose-us-wrapper bg-blue padding-top-50 padding-bottom-30">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-11 col-11">
                        <div class="section-title white b-top desktop-center padding-top-25 margin-bottom-55">
                            <h2 class="title">Why choose Swift Logistics Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-why-us-box margin-bottom-30">
                            <div class="icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="#">Widest Network</a>
                                </h4>
                                <p>Partnerships with more than 120+ carriers spanning across all of North America.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-why-us-box margin-bottom-30">
                            <div class="icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Best Customer Services</h4>
                                </a>
                                <p>The highest levels of customer service and personalized shipments in the industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-why-us-box margin-bottom-20">
                            <div class="icon">
                                <i class="flaticon-box-4"></i>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Lowest Price</h4>
                                </a>
                                <p>The lowest prices with the fastest service ensures you get the best deal faster.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose us area end -->

    <!-- testimonial area start  -->
    <section class="testimonial-area bg-blue bg-image padding-top-110 padding-bottom-120" style="background-image: url({{ asset('assets/img/bg/05.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-area margin-top-10">
                        <div class="testimonial-carousel">
                            <div class="single-testimonial-item">
                                <div class="content">
                                    <div class="icon">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <h2 class="title">testimonial</h2>
                                    <p class="description">I found myself working in a true partnership that results in an incredible experience, and an end product that is the best for your shipping. </p>
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <h4 class="title">Andre Robin
                                            </h4>
                                            <span class="designation">CTO, art media</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-img">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/testimonial/01.png') }}" alt="testimonial">
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-item">
                                <div class="content">
                                    <div class="icon">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <h2 class="title">testimonial</h2>
                                    <p class="description">I found myself working in a true partnership that results in an incredible experience, and an end product that is the best for your shipping. </p>
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <h4 class="title">Andre Robin
                                            </h4>
                                            <span class="designation">CTO, art media</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-img">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/testimonial/01.png') }}" alt="testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- Request free quote -->
    <div class="request-area bg-image padding-bottom-120 padding-top-120" style="background-image: url({{ asset('assets/img/bg/06.png') }})">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="left-content-area">
                        <div class="request-img" style="background-image: url({{ asset('assets/img/request/01.png') }});"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="righti-content-area">
                        <div class="request-page-form-wrap">
                            <div class="section-title white">
                                <h4 class="title">Request a free quote</h4>
                            </div>
                            <form action="https://irtech.biz/TF/additrans/request.html" class="request-page-form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select id="f-type">
                                            <option value="volvo">Freight Type</option>
                                            <option value="saab">Saab</option>
                                            <option value="opel">Opel</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                        <div class="select-arrow"></div>
                                        <div class="select-arrow"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="city" placeholder="City of Departure" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="weight" placeholder="Total Weight" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="city" placeholder="Deliver City" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="time" placeholder="Time" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Submit Request" class="submit-btn">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
