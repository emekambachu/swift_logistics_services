<img src="{{ asset('swiftlog_logo.png') }}" width="120">

<h3>Hello {{ $name }}</h3>

<p>Your Shipment has been initialized<br>
    Below is your tracking code<br>
    <strong>{{ $tracking_id }}</strong><br><br>

    Use this code to track your shipment <a href="{{ url('track-shipment') }}"><strong>here</strong></a>
</p><br><br>

<p align="center">
    For more info, contact <i>info@swiftlogservices.com</i>
</p>
