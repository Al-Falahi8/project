@extends('layouts.main')
@section('title', 'Category Page')
@section('content')
    
    <div class="container text-center">
        <div class="row">
            @foreach ($categories as $product)
                <div class="card col-3 mr-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('uploads/products/', $product->image) }}" width="100%" height="225" text="Thumbnail" alt="Card image cap">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title"><strong>{{ $product->name }}</strong></h2>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div class="card-body">
                        <p class="card-link">Price: €<span>{{ $product->price }}</span></p>
                        <a href="{{ route('ViewProduct')}}" class="btn btn-dark btn-block">View asset</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection