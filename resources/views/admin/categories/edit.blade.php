{{-- @extends('layouts.dashboard')
@section('title', 'Edit Catagories')
@section('content')

    <div class="container">
        <form class="form" action="{{ route('categories.update', $category->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" value="{{ $category->name }}" type="text" name="name" placeholder="Catagory Name">
                    </div>
                </div>

            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-md btn-dark" type="submit" value="save">Update</button>
                </div>
            </div>
        </form>
    </div>

@endsection --}}