@extends('layouts.controlpanel')

@section('title')
    Edit Parcel
@endsection


@section('contents')
    <div class="row">

        <div class="col-sm-6 text-left p-5">

            @include('includes.alerts')

            <h3>Edit this shipment</h3>
            <form method="post" action="{{ route('parcels.update', $parcel->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" type="text"
                           value="{{ $parcel->name }}" required>
                </div>

                <div class="form-group">
                    <label>Weight</label>
                    <input name="weight" class="form-control" type="text"
                           value="{{ $parcel->weight }}" required>
                </div>

                <div class="form-group">
                    <label>Parcel Description</label>
                    <textarea class="form-control" name="description">
                        {{ $parcel->description }}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>


        </div>

    </div>
@endsection
