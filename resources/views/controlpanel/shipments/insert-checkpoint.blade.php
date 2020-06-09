@extends('layouts.controlpanel')

@section('title')
    Insert Checkpoint
@endsection


@section('contents')
    <div class="row">
        <div class="col-sm-6 text-left p-5">

            @include('includes.alerts')

            <h3>Insert checkpoint</h3>
            <p><strong>Shipment Details:</strong></p>
            <p>
                <strong>Tracking ID:</strong> {{ $shipment->tracking_id }}<br>
                <strong>Origin:</strong> {{ $shipment->origin }}<br>
                <strong>Destination:</strong> {{ $shipment->destination }}<br>
                <strong>Name of User:</strong> {{ $shipment->user->name }}<br>
            </p>

            <form method="post" action="{{ action('ShipmentHistoryController@submitCheckpoint', $shipment->id) }}">
                @csrf
                <div class="form-group">
                    <label>Current Location</label>
                    <input name="location" class="form-control" type="text" placeholder="Current Location" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <textarea class="form-control" name="status" placeholder="Status of Shipment in this location" required>

                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection
