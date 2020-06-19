@extends('layouts.main')
@section('title', 'Home')
@section('content')
    
    {{-- <div class="container">
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="" type="video/mp4">
            </video>
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3"></h1>
                        <p class="lead mb-0"></p>
                    </div>
                </div>
            </div>
        </header>
    </div> --}}
    
    <!-- 2D Game Assets section -->
    {{-- <div class="container my-auto">
            <div class="wrapper">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-lg-5 mt-5">
                    
                    </div>
                </div>
            </div>
    </div> --}}
    
    <div class="flex-center position-ref full-height pt-5 mb-5">
            
            <div class="content">
                <div class="title m-b-md">
                    <div class="item__banner--blurred"></div>
                </div>

                <div class="section--sm section--offwhite section--assets">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm-6">
                    <h2 class="h4 mt0">2D Game Assets</h2>
                </div>

                <div class="col-sm-6 hidden-xs text-right">
                @php
                    $categories = DB::table('categories')->where('id', 2)->get();
                @endphp
                @foreach ($categories as $category)
                <a href="{{url('categories', $category->id)}}" class="btn btn-sm btn-dark">Browse all 2D </a>
                @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/background-2d.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                <div class="item-card__price">
                                    <span class="item-card__price__figure">
                                        <ins>
                                            <span class="Card-Price-amount amount"><span class="Card-Price-currencySymbol">€</span>2.25</span>
                                        </ins>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="{{ route('ViewProduct')}}">View asset</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/background-2d.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="{{ route('ViewProduct')}}">View asset</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/background-2d.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="{{ route('ViewProduct')}}">View asset</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/background-2d.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="{{ route('ViewProduct')}}">View asset</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3D Game Assets section -->
                </div>
                    <div class="section--sm section--offwhite section--assets">
                        <div class="container">
                            <div class="row">
                            <div class="col-sm-6">
                        <h2 class="h4 mt0">3D Game Assets</h2>
                    </div>

                    <div class="col-sm-6 hidden-xs text-right">
                        @php
                        $categories = DB::table('categories')->where('id', 3)->get();
                    @endphp
                    @foreach ($categories as $category)
                        <a href="{{url('categories', $category->id)}}" class="btn btn-sm btn-dark">Browse all 3D </a>
                    @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/3D-background.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">View asset</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/3D-background.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">View asset</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/3D-background.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">View asset</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/3D-background.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="Card-Price-amount amount"><span class="Card-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">View asset</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GUI Game Assets section -->

                </div>
                    <div class="section--sm section--offwhite section--assets">
                        <div class="container">
                            <div class="row">
                            <div class="col-sm-6">
                        <h2 class="h4 mt0">GUI Game Assets</h2>
                    </div>

                    <div class="col-sm-6 hidden-xs text-right">
                    @php
                        $categories = DB::table('categories')->where('id', 4)->get();
                    @endphp
                    @foreach ($categories as $category)
                        <a href="{{url('categories', $category->id)}}" class="btn btn-sm btn-dark">Browse all GUI </a>
                    @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/GUL.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                <div class="item-card__price">
                                    <span class="item-card__price__figure">
                                        <ins>
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                        </ins>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">View asset</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/GUL.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">View asset</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/GUL.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">View asset</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/GUL.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Background Forest</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="Card-Price-amount amount"><span class="Card-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">View asset</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Character Assets section -->

                </div>
                    <div class="section--sm section--offwhite section--assets">
                        <div class="container">
                            <div class="row">
                            <div class="col-sm-6">
                        <h2 class="h4 mt0">Character</h2>
                    </div>

                    <div class="col-sm-6 hidden-xs text-right">
                    @php
                        $categories = DB::table('categories')->where('id', 1)->get();
                    @endphp
                    @foreach ($categories as $category)
                        <a href="{{url('categories', $category->id)}}" class="btn btn-sm btn-dark">Browse all Character </a>
                    @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/2D-Character.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">2D-Character</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">Character</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/2D-Character1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">2D-Character</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">Character</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/2D-Character1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">2D-character</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">Character</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('dist/img/2D-Character1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">2D-character</h5>
                            </div>
                            <div class="col-xs-7">
                                        <div class="item-card__price">
                                            <span class="item-card__price__figure">
                                                <ins>
                                                    <span class="Card-Price-amount amount"><span class="Card-Price-currencySymbol">€</span>2.25</span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>
                            <div class="col-xs-5 offset-md-7">
                                <span class="btn btn-md btn-dark" href="#">Character</span>
                            </div>
                        </div>
                    </div>
                </div>
                
@endsection