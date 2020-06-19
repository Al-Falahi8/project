@extends('layouts.dashboard')
@section('title', 'User Dashboard')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="table col-12 text-left">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <th>#</th>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Delete</th>
                    </thead>

                    <tbody>
                        <div class="row">
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><img src="{{ $user->avatar }}" style="width: 32px; height: 32px; position:absolute; bottom: 1px; left:10px; border-radius:50%;"></td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                            @endforeach
                        </div>
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection