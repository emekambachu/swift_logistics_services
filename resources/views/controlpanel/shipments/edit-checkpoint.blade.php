@extends('layouts.controlpanel')

@section('title')
    Edit Checkpoint
@endsection

@section('contents')
    <div class="row">

        <div class="col-sm-6 text-left p-5">

            @include('includes.alerts')

            <h3>Edit Checkpoint</h3>
            <form method="post" action="{{ route('shipment-history.update', $checkpoint->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Current Location</label>
                    <input name="location" class="form-control" type="text"
                           value="{{ $checkpoint->location }}" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <textarea class="form-control" name="status" required>
                            {{ $checkpoint->status }}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>


        </div>

    </div>
@endsection
