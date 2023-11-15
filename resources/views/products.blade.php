@extends('layout.base')
@section('title')
Products
@endsection

@section('maincontent')

    <div class="navbar">@include('layout.navbar')</div>



        <link rel="stylesheet" href="<?php echo asset('assets/css/productdisplay.css') ?>">
<div class="container d-flex justify-content-center mt-50 mb-50">
        <h1>All Products:</h1>
        <div class="row">
            @foreach($product_array as $item)		
            <div class="col-md-4 mt-2" style=" padding:0px; margin-bottom:10px;">
                    <div class="card">
                    <div class="card-body">
                        <div class="card-img-actions">
                                <img src="{{ asset('storage/images/'.$item['image_path'])}}" class="card-img img-fluid" width="96" height="350" alt="">
                        </div>
                    </div>
                    <div class="card-body bg-light text-center">
                        <div class="mb-2">
                            <h6 class="font-weight-semibold mb-2">
                                <h3 class="text-default mb-2" data-abc="true"> {{ $item['name'] }}</h3>
                            </h6>
                            <p class="text-muted" data-abc="true">{{$item['category']}}</p>
                        </div>
                        <!-- <h3 class="mb-0 font-weight-semibold">Rs. {{$item['price']}}</h3> -->
                        <h4 class="mb-0 font-weight-semibold">{{$item['totalsale']}} Sales </h4>
                        <a href="{{ route('ind_product', ['id' => $item['id']]) }}"type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> View Details</a>

                    </div>
                </div>

           </div> 
        @endforeach
        </div>
    </div>
<div class="footer">@include('layout.footer')</div>
@endsection
