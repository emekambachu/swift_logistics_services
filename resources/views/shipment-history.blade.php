@extends('layouts.main')

@section('title')
    Shipment History
@endsection

@section('contents')
    <div class="breadcrumb-area  margin-bottom-20" style="background-image:url({{ asset('assets/img/breadcrumb/01.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Shipment History</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('track-shipment') }}">Track Shipment</a></li>
                            <li><a>Shipment History</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 50px;">

        <table class="table table-dark">
            <tbody>
            <tr>
                <td><strong>Recipient Name:</strong> {{ $shipment->user->name }} </td>
                <td><strong>Recipient Email:</strong> {{ $shipment->user->email }}</td>
                <td><strong>Recipient Mobile:</strong> {{ $shipment->user->mobile }}</td>
            </tr>
            <tr>
                <td><strong>Parcel Name:</strong> {{ $shipment->parcel->name }} </td>
                <td><strong>Parcel Weight:</strong> {{ $shipment->parcel->weight }}KG</td>
                <td><strong>Parcel Description:</strong> {{ $shipment->parcel->description }}</td>
            </tr>
            <tr>
                <td><strong>Tracking ID:</strong> {{ $shipment->tracking_id }}</td>
                <td><strong>Shipment Origin:</strong> {{ $shipment->origin }}</td>
                <td><strong>Shipment Destination:</strong> {{ $shipment->destination }}</td>
            </tr>
            <tr>
                <td><strong>Shipment Date:</strong> {{date('jS \of F Y', strtotime($shipment->created_at))}}</td>
                <td><strong>Last Shipment Date:</strong>
                    @if(!empty($lastCheckpoint->created_at))
                        {{date('jS \of F Y', strtotime($lastCheckpoint->created_at))}}
                    @else
                        <i>Awaiting Shipment</i>
                    @endif
                </td>
                <td><strong>Last Location:</strong>
                    @if(!empty($lastCheckpoint->location))
                        {{$lastCheckpoint->location}}
                    @else
                        <i>Awaiting Shipment</i>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Status</th>
                <th scope="col">Location</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>

            @if($checkpoints)
                @foreach($checkpoints as $checkpoint)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $checkpoint->status }}</td>
                        <td>{{ $checkpoint->location }}</td>
                        <td>{{date('jS \of F Y', strtotime($checkpoint->created_at))}}</td>
                    </tr>
                @endforeach
            @else
                <p>Awaiting Shipment</p>
            @endif
            </tbody>
        </table>


    </div><!-- /.col-lg-8 -->

@endsection
