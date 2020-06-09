@extends('layouts.controlpanel')

@section('title')
    Add Parcel
@endsection


@section('contents')
    <div class="row">

        <div class="col-sm-6 text-left p-5">

            @include('includes.alerts')

            <h3>Add Parcel</h3>
            <form method="post" action="{{ route('parcels.store') }}">
                @csrf
                <div class="form-group">
                    <label>Parcel Name</label>
                    <input name="name" class="form-control" type="text" placeholder="Parcel Name" required>
                </div>

                <div class="form-group">
                    <label>Parcel Weight</label>
                    <input name="weight" class="form-control" type="number" placeholder="Parcel KG" required>
                </div>

                <div class="form-group">
                    <label>Parcel Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>

    </div>
@endsection
