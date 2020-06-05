@extends('layouts.main')
@section('title', 'Market')
@section('content')

    <br><br><br><br>
    <div class="flex-center position-ref full-height pt-5">
    
        <div class="row">
            @foreach ($allproducts as $product)
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('uploads/products/', $product->image) }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{ $product->name }}</h2>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div class="col-xs-7">
                                <div class="item-card__price">
                                    <span class="item-card__price__figure">
                                        <ins>
                                            <span class="Card-Price-amount amount"><span class="Card-Price-currencySymbol">€</span>{{ $product->price }}</span>
                                        </ins>
                                    </span>
                                </div>
                            </div>
                    <div class="col-xs-5 offset-md-7">
                        {{-- <p class="card-link">Price: €<span>{{ $product->price }}</span></p> --}}
                        <a href="{{ route('ViewProduct')}}" class="btn btn-dark btn-block">View asset</a>
                    </div>
                </div>
            @endforeach
        </div>
    
    </div>
    
@endsection
