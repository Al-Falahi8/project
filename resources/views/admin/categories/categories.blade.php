@extends('layouts.main')
@section('title', 'Category Page')
@section('content')
    
    <div class="container text-center">
        {{-- @php
            $cate_name = DB::table('categories')->select('name')->where('id', $id)->get();
        @endphp
        <h1>
            Catagory :
            @foreach ($cate_name as $categories)
                {{ $categories->name }}
            @endforeach
        </h1> --}}
        <br>
        <div class="row">
            @foreach ($categories as $product)
                <div class="card col-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('uploads/products/', $product->image) }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
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