@extends('layouts.main')
@section('title', 'Category Page')
@section('content')
    
    <div class="container my-container">
        @if( session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            @foreach ($categories as $product)
            <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top img-responsive" src="{{ url('uploads/products/', $product->image) }}" width="100%" alt="Card image cap">
                    <div class="card__content">
                        <h2>{{ $product->name }}</h2>
                        <p>
                            {{ $product->description }}
                        </p>
                    </div>
                    <div class="card__info">
                        <div class="card__price">
                            <p><strong>Price: €&nbsp;</strong>{{ $product->price }}</p>
                        </div>
                        <div>
                            <a href="{{ url('/admin/product.viewproduct', $product->id)}}" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-cart-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $categories->links() }}
    </div>


@endsection