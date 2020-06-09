<img src="{{ asset('swiftlog_logo.png') }}" width="100">

<h3>Dear {{ $name }},</h3>

@if($status)
    <p>
        <strong>Your Shipment has been activated.</strong><br>
        <strong>Tracking ID:</strong> {{ $tracking_id }}
    </p>
    <p>go to our <a href="{{ url('track-shipment') }}"><strong>Track Shipment Page</strong></a> to track your parcel</p>
@else
    <p>
        <strong>Your Shipment has been deactivated.</strong><br>
    </p>
@endif

<p>contact <i>info@swiftlogservices.com</i> for more info.</p>
