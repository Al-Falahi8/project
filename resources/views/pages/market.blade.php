@extends('layouts.main')
@section('title', 'Market')
@section('content')

    <br><br><br><br>
    <div class="container text-center">
        @if( session()->has('success'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('success') }}
                    </div>
                @endif
        <div class="row">
            @foreach ($allproducts as $product)
                <div class="card col-3" style="width: 3rem;">
                    <div class="card-img-top">
                        <img class="card-img-top" src="{{ url('uploads/products/', $product->image) }}" width="100%" height="225" text="Thumbnail" alt="Card image cap">
                    </div>
                    <div class="card-body text-center">
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
