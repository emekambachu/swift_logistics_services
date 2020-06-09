@extends('layouts.controlpanel')

@section('title')
    All Users
@endsection


@section('contents')
    <div class="row">

        <div class="col-xl-12">
            <div class="card card-sec m-b-30">
                <div class="card-body">

                    @include('includes.alerts')

                    <h4 class="mt-0 m-b-15 header-title">Users</h4>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0 table-sm">
                            <thead>
                            <tr class="titles">
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(!empty($users))
                                @foreach($users as $user)

                                    <tr>
                                        <td class="c-table__cell"> {{ $loop->iteration }} </td>
                                        <td class="c-table__cell"> {{ $user->name }} </td>
                                        <td class="c-table__cell"> {{ $user->email }} </td>
                                        <td class="c-table__cell"> {{ $user->mobile }} </td>
                                        <td class="c-table__cell"> {{ $user->country }} </td>
                                        <td class="c-table__cell"> {{ $user->state }} </td>
                                        <td class="c-table__cell"> {{ $user->address }} </td>
                                        <td>
                                            <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="margin-bottom: 5px;">
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

                    {{ $users->links() }}

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
@endsection
