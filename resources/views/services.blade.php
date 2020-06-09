@extends('layouts.main')

@section('title')
    Services
@endsection

@section('contents')
    <div class="breadcrumb-area  margin-bottom-20" style="background-image:url({{ asset('assets/img/breadcrumb/01.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Services</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-provide-area padding-bottom-90 padding-top-120">
        <div class="container">
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
                                    <h4 class="title">Air Fright</h4>
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
                                    <h4 class="title">Road fright</h4>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-what-we-provide-item margin-bottom-30">
                        <div class="single-what-img">
                            <img src="{{ asset('assets/img/we-provide/03.png') }}" alt="">
                        </div>
                        <div class="content-wrapper">
                            <div class="icon">
                                <i class="flaticon-tracking-1"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Sea fright</h4>
                                <p>Wherever your cargo is going, we can arrange the shipment for you and remain competitive with the market. Our ocean freight service volumes provide us buying power with major carriers. We can ship door to door and provide customs clearance.</p>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-what-we-provide-item margin-bottom-30">--}}
{{--                        <div class="single-what-img">--}}
{{--                            <img src="{{ asset('assets/img/we-provide/03.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="content-wrapper">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="flaticon-delivery-truck"></i>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <h4 class="title">movers</h4>--}}
{{--                                <p>Treacherously far so late have immense condescending.</p>--}}
{{--                                <a href="#" class="readmore">Read More<i class="fas fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                --}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-what-we-provide-item margin-bottom-30">--}}
{{--                        <div class="single-what-img">--}}
{{--                            <img src="{{ asset('assets/img/we-provide/03.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="content-wrapper">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="flaticon-box"></i>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <h4 class="title">stroge</h4>--}}
{{--                                <p>Treacherously far so late have immense condescending.</p>--}}
{{--                                <a href="#" class="readmore">Read More<i class="fas fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>

    <section class="testimonial-area bg-blue bg-image padding-top-110 padding-bottom-120" style="background-image: url({{ asset('assets/img/bg/05.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-area margin-top-10">
                        <div class="testimonial-carousel owl-carousel owl-theme owl-loaded">


                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2880px, 0px, 0px); transition: all 0s ease 0s; width: 5760px;"><div class="owl-item cloned" style="width: 930px; margin-right: 30px;"><div class="single-testimonial-item">
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
                                        </div></div><div class="owl-item cloned" style="width: 930px; margin-right: 30px;"><div class="single-testimonial-item">
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
                                        </div></div><div class="owl-item" style="width: 930px; margin-right: 30px;"><div class="single-testimonial-item">
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
                                        </div></div><div class="owl-item active" style="width: 930px; margin-right: 30px;"><div class="single-testimonial-item">
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
                                        </div></div><div class="owl-item cloned" style="width: 930px; margin-right: 30px;"><div class="single-testimonial-item">
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
                                        </div></div><div class="owl-item cloned" style="width: 930px; margin-right: 30px;"><div class="single-testimonial-item">
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
                                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="fa fa-long-arrow-left"></i></div><div class="owl-next" style="display: none;"><i class="fa fa-long-arrow-right"></i></div></div><div style="" class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
