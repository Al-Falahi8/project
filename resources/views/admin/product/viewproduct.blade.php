<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Art</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
</head>
<body>
    @include('layouts.navbar')

        <div class="super_container">
            <header class="header" style="display: none;">
                <div class="header_main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                                <div class="header_search">
                                    <div class="header_search_content">
                                        <div class="header_search_form_container">
                                            <form action="#" class="header_search_form clearfix">
                                                <div class="custom_dropdown">
                                                    <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                        <ul class="custom_list clc">
                                                            <li><a class="clc" href="#">All Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <div class="single_product">
            <div class="container" style=" background-color: #fff; padding: 11px;">
                <div class="row">
                    <div class="col-lg-2 order-lg-1 order-2">
                        <ul class="image_list">
                        <li data-image="{{asset('dist/img/bg1.jpg')}}"><img src="{{asset('dist/img/bg1.jpg')}}" alt=""></li>
                            <li data-image="{{asset('dist/img/bg2.jpg')}}"><img src="{{asset('dist/img/bg2.jpg')}}" alt=""></li>
                            <li data-image="{{asset('dist/img/bg3.jpg')}}"><img src="{{asset('dist/img/bg3.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="image_selected"><img src="{{asset('dist/img/bg1.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6 order-3">
                        <div class="product_description">

                            <div class="product_name">2D Background Assets</div>
                            <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                            <div> <span class="product_price">€ 12.00</span> <strike class="product_discount"> <span style='color:black'>€ 2.00<span> </strike> </div>
                            <div> <span class="product_saved">You Saved:</span> <span style='color:black'>€ 2.00<span> </div>
                            <hr class="singleline">
                            <div> <span class="product_info"> Description <span><br> <span class="product_info">Warranty: 6 months warranty<span><br> <span class="product_info"><span><br> <span class="product_info">7 Days easy return policy<span><br> <span class="product_info">In Stock: 25 units sold this week<span> </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="br-dashed">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-3"> <img src=""> </div>
                                                <div class="col-md-9 col-xs-9">
                                                    <div class="pr-info"> <span class="break-all"></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> </div>
                                </div>
                            </div>
                            <hr class="singleline">
                            <div class="order_info d-flex flex-row">
                                <form action="#">
                            </div>
                            <div class="row">
                                <div class="col-xs-6" style="margin-left: 13px;">
                                        <div class="quantity_buttons">
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> <button type="button" class="btn btn-success shop-button">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script src={{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}> </script>
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    </body>
</html>
