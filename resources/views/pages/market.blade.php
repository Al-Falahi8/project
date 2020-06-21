@extends('layouts.main')
@section('title', 'Market')
@section('content')

    <br><br>
    <div class="container col-sm-12 text-center">
        @if( session()->has('success'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('success') }}
                    </div>
                @endif
        <div class="row">
            @foreach ($allproducts as $product)
                <div class="card col-sm-12 col-md-6 col-lg-3" style="height: 295px; padding: 7px; margin: 0 3px 12px">
                    <div class="card-img-top">
                        <img class="card-img-top" src="{{ url('uploads/products/', $product->image) }}" width="270px" height="145px" text="Thumbnail" alt="Card image cap">
                    </div>
                    <div class="card-body text-center" style="width: 270px; height: 120px;">
                        <h2 class="card-title"><strong>{{ $product->name }}</strong></h2>
                        <p class="card-link"><strong>Price: €&nbsp;</strong><span>{{ $product->price }}</span></p>
                    </div>
                    <p class="card-text">{{ $product->description }}</p>
                    <div class="row">
                    <div class="card text-left">
                        <a href="{{ url('/admin/product.viewproduct', $product->id)}}" class="btn btn-default btn-block">View asset</a>
                    </div>
                    <div class="card text-right">
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-default"><i class="fas fa-cart-arrow-down"></i></a>
                    </div>
                    </div>
                </div>
            @endforeach

            {{ $allproducts->links() }}
        </div>
        
    </div>
    
@endsection
