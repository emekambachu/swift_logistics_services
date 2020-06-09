@extends('layouts.controlpanel')

@section('title')
    Edit Shipment
@endsection


@section('contents')
    <div class="row">

        <div class="col-sm-6 text-left p-5">

            @include('includes.alerts')

            <h3>Edit this shipment</h3>
            <form method="post" action="{{ route('shipments.update', $shipment->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Origin</label>
                    <input name="origin" class="form-control" type="text"
                           value="{{ $shipment->origin }}" required>
                </div>

                <div class="form-group">
                    <label>Final Destination</label>
                    <input name="destination" class="form-control" type="text"
                           value="{{ $shipment->destination }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>


        </div>

    </div>
@endsection
