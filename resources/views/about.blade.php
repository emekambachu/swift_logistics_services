@extends('layouts.main')

@section('title')
    About
@endsection

@section('contents')
    <div class="breadcrumb-area  margin-bottom-20" style="background-image:url({{ asset('assets/img/breadcrumb/01.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">About Us</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">About us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="we-offer-area m-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="we-offer-content style-03">
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

    <div class="misson-area bg-image padding-top-350 padding-bottom-90" style="background-image: url({{ asset('assets/img/bg/03.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="misson-content">
                        <div class="content margin-bottom-30">
                            <div class="section-title white">
                                <h2 class="title">Keep an eye on every details</h2>
                                <p>Our global network of locations like Southern California, USA, Singapore, The Netherlands or Dubai, UAE allows our team to move your products quickly and efficiently from one country to another supporting your supply chain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-misson-item margin-bottom-30">
                        <div class="single-what-img">
                            <img src="{{ asset('assets/img/we-provide/02.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Our mission</h4>
                            <p>Our goal is not to be in all locations, but the right locations to serve the global needs of our customers and partners. Swift Logistics was formed to ‘fill a gap’ in the SE Asia market (ASEAN) as well as locate in all key global trading lanes. There has never before been an ASEAN headquartered integrated logistics company located in all 10 countries with branch offices globally.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-misson-item margin-bottom-30">
                        <div class="single-what-img">
                            <img src="{{ asset('assets/img/we-provide/03.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Our vision</h4>
                            <p>We need to be excellent at what we do. A talent pool experienced, well-trained logisticians provides the key driver to sustainable, consistent and quality execution. Measured metrics drive internal process, continuous improvement and tie to our internal incentive plans.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="why-choose-use-area bg-image-03 padding-bottom-85" style="background-image: url({{ asset('assets/img/bg/04.png') }})">
        <div class="container">
            <div class="why-choose-us-wrapper padding-top-120">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title b-top desktop-center padding-top-25 margin-bottom-55">
                            <h2 class="title">Why choose Swift Logistics Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-why-us-box style-02 margin-bottom-30">
                            <div class="icon">
                                <i class="flaticon-air-freight"></i>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Widest Network</h4>
                                </a>
                                <p>Partnerships with more than 120+ carriers spanning across all of North America</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-why-us-box style-02 margin-bottom-30">
                            <div class="icon">
                                <i class="flaticon-delivery-truck"></i>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Best Customer Service</h4>
                                </a>
                                <p>The highest levels of customer service and personalized shipments in the industry</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-why-us-box style-02 margin-bottom-20">
                            <div class="icon">
                                <i class=" flaticon-box-4"></i>
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
