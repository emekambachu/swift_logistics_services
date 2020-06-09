@extends('layouts.main')

@section('title')
    Sign up
@endsection

@section('top-assets')
    <script src="{{ asset('assets/js/countries.js') }}" type="text/javascript"></script>

    <style>
        label{
            color: #f1f1f1;
        }

        selector{
            padding-top: 15px;
            padding-bottom: 15px;
        }
    </style>
@endsection

@section('contents')
    <div class="breadcrumb-area  margin-bottom-20" style="background-image:url({{ asset('assets/img/breadcrumb/01.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Sign up</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">Sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area bg-image padding-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="left-content-area">
                        <div class="shipping-area">
                            <div class="section-title white">
                                <h5 class="title">Sign up to get your Tracking id</h5>
                            </div>

                            @include('includes.alerts')

                            <form method="post" action="{{ route('users.store') }}" class="request-page-form margin-top-60">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Mobile</label>
                                    <div class="form-group">
                                        <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" value="{{ old('mobile') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Country</label>
                                    <select id="country" name="country" class="@error('country') is-invalid @enderror" required>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>State</label>
                                    <select id="state" name="state" class="@error('state') is-invalid @enderror">
                                    </select>
                                </div>
                                <script language="javascript">
                                    populateCountries("country", "state");
                                    populateCountries("country2");
                                </script>

                                <div class="form-group">
                                    <label>Address</label>
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}">
                                    </div>
                                </div>

                                <button type="submit" class="submit-btn">Sign up</button>
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
                                        <h4 class="title">24/7 support</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="single-header-bottom-item white">
                                    <div class="icon">
                                        <i class="flaticon-map-4"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Global shipping</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="single-header-bottom-item white">
                                    <div class="icon">
                                        <i class="flaticon-booking"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">On time delivery</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="single-header-bottom-item white">
                                    <div class="icon">
                                        <i class="flaticon-businessman"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Our Expert Team</h4>
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
