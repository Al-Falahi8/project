@extends('layouts.main')
@section('title', 'Market')
@section('content')

    <br><br><br><br>
    <div class="container col-lg-12 text-center">
        @if( session()->has('success'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('success') }}
                    </div>
                @endif
        <div class="row">
            @foreach ($allproducts as $product)
                <div class="card bg-dark col-3 mr-1">
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ url('uploads/products/', $product->image) }}" width="100%" height="225" text="Thumbnail" alt="Card image cap">
                    </div>
                    <div class="card-body text-center text-white">
                        <h2 class="card-title"><strong>{{ $product->name }}</strong></h2>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <p class="card-link">Price: €<span>{{ $product->price }}</span></p>
                    <div class="row">
                    <div class="card-body text-left">
                        <a href="{{ url('/admin/product.viewproduct', $product->id)}}" class="btn btn-default btn-block">View asset</a>
                    </div>
                    <div class="card-body text-right">
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-default"><i class="fas fa-cart-arrow-down"></i></a>
                    </div>
                    </div>
                </div>
            @endforeach

            {{ $allproducts->links() }}
        </div>
        
    </div>
    
@endsection
