@extends('layouts.controlpanel')

@section('title')
    All Shipments
@endsection


@section('contents')
    <div class="row">

        <div class="col-xl-12">
            <div class="card card-sec m-b-30">
                <div class="card-body">

                    @include('includes.alerts')

                    <h4 class="mt-0 m-b-15 header-title">Shipments</h4>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0 table-sm">
                            <thead>
                            <tr class="titles">
                                <th>S/N</th>
                                <th>Parcel</th>
                                <th>User</th>
                                <th>Tracking Id</th>
                                <th>Origin</th>
                                <th>Destination</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(!empty($shipments))
                                @foreach($shipments as $ship)

                                    <tr>
                                        <td class="c-table__cell"> {{ $loop->iteration }} </td>
                                        <td class="c-table__cell"> {{ $ship->parcel ? $ship->parcel->name: 'No Parcel' }} </td>
                                        <td class="c-table__cell"> {{ $ship->user ? $ship->user->name: 'Not Assigned' }} </td>
                                        <td class="c-table__cell"> {{ $ship->tracking_id }} </td>
                                        <td class="c-table__cell"> {{ $ship->origin }} </td>
                                        <td class="c-table__cell"> {{ $ship->destination }} </td>
                                        <td class="c-table__cell">{{date('jS \of F Y', strtotime($ship->created_at))}}</td>
                                        <td>
                                            <a class="mb-2" href="{{ action('ShipmentHistoryController@shipmentCheckpoints', $ship->id) }}">
                                                <button class="btn btn-sm btn-warning">
                                                    Checkpoints
                                                </button>
                                            </a>

                                            <a class="mb-2" href="{{ action('ShipmentController@insertCheckpoint', $ship->id) }}">
                                                <button class="btn btn-sm btn-warning">
                                                    Insert checkpoint
                                                </button>
                                            </a>

                                            <a href="{{route('shipments.edit', $ship->id)}}">
                                                <button class="btn btn-sm btn-warning">
                                                    Edit
                                                </button>
                                            </a>

                                            <form class="mt-2" method="POST" action="{{ action('ShipmentController@activateShipment', $ship->id) }}" style="margin-bottom: 5px;">
                                                @csrf
                                                <button type="submit" class="btn btn-info btn-sm">
                                                    {{ $ship->is_active ? 'Deactivate' : 'Activate' }}
                                                </button>
                                            </form>

                                            <form method="POST" action="{{ route('shipments.destroy', $ship->id) }}" style="margin-bottom: 5px;">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-warning btn-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                    {{ $shipments->links() }}

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
@endsection
