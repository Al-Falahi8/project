@extends('layouts.dashboard')
@section('title', 'Managment')
@section('content')

    <div class="container">
        <div class="card card-dark">

            <div class="card-header">
                Users
            </div>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Permission</th>
                    <th>Delete</th>
                </thead>

                <tbody>
                    @if($users->count() >0)

                        @foreach ($users as $user)
                            <tr>
                                <td><img src="{{ asset('$user->profile->avatar') }}" alt="" width="60px" height="60px" style="border-radius: 50%;"></td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach

                    @else
                        <tr>
                            <th colspan="5" class="text-center">There is no Users</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection