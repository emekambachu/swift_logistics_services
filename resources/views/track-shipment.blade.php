@extends('layouts.main')

@section('title')
    Track Shipment
@endsection

@section('contents')
    <div class="breadcrumb-area  margin-bottom-20" style="background-image:url({{ asset('assets/img/breadcrumb/01.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Track Shipment</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">Track Shipment</a></li>
                        </ul>
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

                                @include('includes.alerts')

                                <h4 class="title">Track your shipping</h4>
                                <p>* Please key the track id to get your shipping location</p>
                            </div>

                            <form method="post" action="{{ url('track-shipment') }}" class="shipping-form margin-top-60">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="tracking_id" class="form-control" placeholder="Enter track id" required>
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
                                        <i class="flaticon-online-service"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">24/7 support
                                        </h4>
                                        <p>Treacherously far condescending invidiously menially and constitutionally into capriciously. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="single-header-bottom-item white">
                                    <div class="icon">
                                        <i class="flaticon-map-4"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Global shipping
                                        </h4>
                                        <p>Treacherously far condescending invidiously menially and constitutionally into capriciously. </p>
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
                                        <i class="flaticon-businessman"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Our Expart Team
                                        </h4>
                                        <p>Treacherously far condescending invidiously menially and constitutionally into capriciously. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
