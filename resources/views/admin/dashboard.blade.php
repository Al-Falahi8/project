@extends('layouts.dashboard')
@section('title', 'User Dashboard')
@section('content')
@can('manage-users')
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
        </div>
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-gradient-success">
                        <span class="info-box-icon">
                            <i class="nav-icon fas fa-users">
                        </i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number">{{ \App\User::all()->count() }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-gradient-warning">
                        <span class="info-box-icon">
                            <i class="nav-icon fas fa-cube"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Products</span>
                            <span class="info-box-number">{{ \App\Product::all()->count() }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-gradient-info">
                        <span class="info-box-icon">
                            <i class="fas fa-comments"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Comments</span>
                            <span class="info-box-number">{{ \App\Discussion::all()->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <hr>

    <div class="container mt-5">
        <h3 class="mb-3 text-dark">Product Table</h3>
        <div class="row">
            <div class="table col-12 text-right">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <div class="row">
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ url('uploads/products/', $product['image']) }}" class="img-left" width="100" height="50" text="Thumbnail" alt=""></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </div>
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endcan
@endsection
