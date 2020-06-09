@extends('layouts.controlpanel')

@section('title')
    Shipment Checkpoints
@endsection

@section('contents')
    <div class="row">

        <div class="col-xl-12">
            <div class="card card-sec m-b-30">
                <div class="card-body">

                    @include('includes.alerts')

                    <h4 class="mt-0 m-b-15 header-title">Shipment Checkpoints</h4>
                    <p><strong>Shipment Details</strong></p>
                    <p>
                        <strong>Trackng ID:</strong> {{ $shipment->tracking_id }}<br>
                        <strong>Origin:</strong> {{ $shipment->origin }}<br>
                        <strong>Destination:</strong> {{ $shipment->destination }}<br>
                    </p>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0 table-sm">
                            <thead>
                            <tr class="titles">
                                <th>S/N</th>
                                <th>Current Location</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($checkpoints as $check)
                                <tr>
                                    <td class="c-table__cell"> {{ $loop->iteration }} </td>
                                    <td class="c-table__cell"> {{ $check->location }} </td>
                                    <td class="c-table__cell"> {{ $check->status }} </td>
                                    <td class="c-table__cell">{{date('jS \of F Y', strtotime($check->created_at))}}</td>
                                    <td>
                                        <a href="{{route('shipment-history.edit', $check->id)}}">
                                            <button class="btn btn-sm btn-warning">
                                                Edit
                                            </button>
                                        </a>

                                        <form method="POST" action="{{ route('shipment-history.destroy', $check->id) }}" style="margin-bottom: 5px;">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $checkpoints->links() }}

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
@endsection
