@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h3 class="mt-3 mb-3">Your purchases</h3>
        <div class="row">
            @foreach ($carts as $cart)
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Download</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($cart->items as $item)
                    <tr>
                        <th scope="row"></th>
                        <td>{{( $item['name'] )}}</td>
                        <td>€{{( $item['price'] )}}</td>
                        <td>{{( $item['qty'] )}}</td>
                        <td> Paid </td>
                        <td>
                            <form action="{{ route('down.show', $item['id']) }}" method="POST">
                                @csrf
                                <a type="submit" class="btn btn-success"><i class="fas fa-download"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="badge badge-pill badge-dark bm-3 p-3 text-white">Total Price : € {{ $cart->totalPrice}}</p>
            @endforeach
        </div>
    </div>

@endsection  