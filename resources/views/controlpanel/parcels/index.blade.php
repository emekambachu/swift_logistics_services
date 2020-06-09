@extends('layouts.controlpanel')

@section('title')
    All Parcels
@endsection


@section('contents')
    <div class="row">

        <div class="col-xl-12">
            <div class="card card-sec m-b-30">
                <div class="card-body">

                    @include('includes.alerts')

                    <h4 class="mt-0 m-b-15 header-title">Recent Submission</h4>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="thead-dark">
                            <tr class="titles">
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Parcel Number</th>
                                <th>Parcel Weight</th>
                                <th>Description</th>
                                <th>Created</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(!empty($parcels))
                                @foreach($parcels as $par)

                                    <tr>
                                        <td class="c-table__cell"> {{ $loop->iteration }} </td>
                                        <td class="c-table__cell"> {{ $par->name }} </td>
                                        <td class="c-table__cell"> {{ $par->parcel_number }} </td>
                                        <td class="c-table__cell"> {{ $par->weight }} </td>
                                        <td class="c-table__cell"> {{ $par->description }} </td>
                                        <td class="c-table__cell">{{date('jS \of F Y', strtotime($par->created_at))}}</td>
                                        <td>
                                            <a href="{{route('parcels.edit', $par->id)}}">
                                                <button class="btn btn-circle btn-warning">
                                                    Edit
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('parcels.destroy', $par->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-circle btn-danger">
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

                    {{ $parcels->links() }}

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
@endsection
