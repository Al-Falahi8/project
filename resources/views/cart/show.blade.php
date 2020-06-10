@extends('layouts.main')
@section('title', 'Cart Page')
@section('content')

    <h3>My Cart</h3>
    <div class="container">
        <div class="row no-gutters">
            @if($cart)
                <div class="col-md-8">
                    @foreach ($cart->items as $product)
                    <div class="card md-2">
                        <img src="{{ url('uploads/products/', $product['image']) }}" class="img-left" width="10%" height="80" text="Thumbnail" alt="">
                            <h5 class="card-title">
                                {{ $product['name'] }}
                            </h5>
                            <div class="card-text align-text">
                                €{{ $product['price'] }}
                                <form action="{{ route('product.remove', $product['id']) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="href btn btn-danger btn-ms ml-4 float-right" style="margin-top: -30px;">Remove</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title text-center">
                                Checkout
                                <hr>
                            </h3>
                            <div class="card-text">
                                <p>
                                    Total Amount is : € {{ $cart->totalPrice }}
                                </p>
                                <p>
                                    Total Quantity is : {{ $cart->totalQty }}
                                </p>
                            <a href="{{ route('cart.checkout', $cart->totalPrice) }}" class="btn btn-dark btn-block">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            <P>There are no Assets in the Cart</P>
            @endif
        </div>
    </div>

@endsection
