@extends('layouts.main')
@section('title', 'Category Page')
@section('content')
    
    <div class="container col-12 text-center m-0 p-0">
        @if( session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            @foreach ($categories as $product)
                <div class="card col-sm-12 col-md-6 col-lg-3 mb-3"  style="height: 295px; width: 270px; padding: 2px; background: rgb(221, 221, 221);">
                    <div class="card-img-top">
                        <img class="card-img-top" src="{{ url('uploads/products/', $product->image) }}" width="270px" height="145px" text="Thumbnail" alt="Card image cap">
                    </div>
                    <div class="card-body" style="width: 270px; height: 120px;">
                        <h2 class="card-title ml-2"><strong>{{ $product->name }}</strong></h2>
                        <p class="card-text ml-3">{{ $product->description }}</p>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="float-left col-md-5 ml-3">
                            <p class="card-link"><strong>Price: €&nbsp;</strong><span>{{ $product->price }}</span></p>
                        </div>

                        <div class="float-right col-md-5">
                            <a href="{{ url('/admin/product.viewproduct', $product->id)}}" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-cart-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $categories->links() }}
        </div>
    </div>

@endsection