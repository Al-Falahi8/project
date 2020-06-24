@extends('layouts.dashboard')
@section('title', 'Create Catagories')
@section('content')

    <div class="container">
        <form class="form" action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Catagory Name">
                    </div>
                </div>

            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-md btn-dark" type="submit" value="save">Add Catagory</button>
                </div>
            </div>
        </form>
    </div>

@endsection