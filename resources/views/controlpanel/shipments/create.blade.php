@extends('layouts.controlpanel')

@section('title')
    Create Shipment
@endsection


@section('contents')
    <div class="row">
        <div class="col-sm-6 text-left p-5">

            @include('includes.alerts')

            <h3>Create Shipments</h3>
            <p>create shipments from user and parcel info</p>
            <form method="post" action="{{ route('shipments.store') }}">
                @csrf
                <div class="form-group">
                    <label>User</label>
                    <select class="form-control" name="user_id" required>
                        <option selected>Select User</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Parcel</label>
                    <select class="form-control" name="parcel_id" required>
                        <option selected>Select Parcel</option>
                        @foreach($parcels as $parcel)
                            <option value="{{ $parcel->id }}">{{ $parcel->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Origin</label>
                    <input name="origin" class="form-control" type="text" placeholder="Shipment Origin" required>
                </div>

                <div class="form-group">
                    <label>Destination</label>
                    <input name="destination" class="form-control" type="text" placeholder="Shipment Destination" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection
