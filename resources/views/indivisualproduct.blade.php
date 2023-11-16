@extends('layout.base')
@section('title')
Product
@endsection

@section('maincontent')

    <div class="navbar">@include('layout.navbar')</div>



        <link rel="stylesheet" href="<?php echo asset('assets/css/productdisplay.css') ?>">
     
            @foreach($product_array as $item)	

                <div style="display:flex; flex-direction:row; align-items: center; flex-wrap:wrap; flex-shrink:srink; justify-content: space-evenly; margin-bottom:100px; width:100vw; position:relative; ">
                    <img src="{{ asset('storage/images/'.$item['image_path'])}}" style="max-width:37vw; min-width:200px; " alt="No Img!" srcset="">
                    
                    
                    <div style="padding-left:5vw; min-width:400px; max-width:45vw; display:flex; flex-direction:column; align-items:center; padding-top:20px;">
                        <img src="{{ asset('assets/image/updesign.png')}}" alt="">
                        <h1 style="font-family:Lily Script One; color:#890304; text-align:center">{{$item['name']}}</h1>
                        <h5><i>{{$item['category']}}</i></h5>
                        <h3 style="font-family:Inaria Serif; color:#890304; text-align:center">{{$item['pro_des']}}</h3>
                        <h4  style="font-family:Inaria Serif; color:#890304; text-align:center"><b>Material:</b><i>{{$item['material']}}</i></h4>
                        <h4  style="font-family:Inaria Serif; color:#890304; text-align:center"><i>{{$item['totalsale']}} sales</i> | <b>Rs. {{$item['price']}}</b></h4>
                        <img src="{{ asset('assets/image/downdesign.png')}}" alt="">    
                    </div>  
                
                </div>
            @endforeach
        <div class="footer">@include('layout.footer')</div>
        @endsection