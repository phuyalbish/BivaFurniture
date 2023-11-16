@extends('layout.base')
@section('title')
Home
@endsection

@section('maincontent')


<div class="backgroundstill">
  <div class="redbackground">
    <div class="navbar">@include('layout.navbar')</div>
    <div class="displaybar">
      <div class="displayimage">
        <img  id="forgroundsofa"  src="<?php echo asset('assets/image/frgsofa.png')?>" alt="" />
      </div>
      <div class="maininfo">
        <h1>
          BIVA FURNITURE FOR<br />
          YOUR HOME
        </h1>
        <h3>YOUR LUXURY STARTS HERE <br><br>{{ $alltotalsale }}+ Successful Contracts</h3>
        <button class="buttonmaininfo">Learn More</button>
      </div>
    </div>
  </div>
<div class="container">
  <div class="paddingfeature"></div>
  <div class="features row" style="width:80vw; text-align:center; margin-left:5vw;">
    <div class="col-sm-4 innerfeature">
      <img
        src="<?php echo asset('assets/image/face-smile-solid.svg')?>"
        alt=""
        class="featureimage"  style="width:30px"
      />
      <h3>Comfort</h3>
      <p>
        Emmerse Yourself in the Unmatched Luxury of Our Handcrafted Italian Furniture, Where Each Thoughtfully Designed Piece Invites You to Experience the Pinnacle of Relaxation and Style, Creating a Home that Speaks of Unparalleled Elegance and Comfort.
      </p>
    </div>
    <div class="col-sm-4 innerfeature">
      <img
        src="<?php echo asset('assets/image/crown-solid.svg')?>"
        alt=""
        class="featureimage"  style="width:30px"
      />
      <h3>Luxury</h3>
      <p>
        Redefining Luxury Living with Our Handpicked Collection of Italian Artisan Furniture, Each Piece a Testament to Time-Honored Craftsmanship, Elevating Your Space into a Sanctuary of Comfort, where Luxury Meets the Sublime Beauty of Italian Design.
      </p>
    </div>
    <div class="col-sm-4 innerfeature">
      <img
        src="<?php echo asset('assets/image/heart-solid.svg')?>"
        alt=""
        class="featureimage" style="width:30px"
      />
      <h3>Beauty</h3>
      <p>
       Our Handmade Furniture Collection Promises More Than Aesthetics—It Embodies a Lifestyle. Imbued with Comfort, Elegance, and Uncompromising Craftsmanship, Each Piece Transforms Your Home into an Oasis of Luxury, a Testament to the Art of Italian Living.
      </p>
    </div>
  </div>
  </div>
</div>

<div class="home_midcontent">


    <div class="productdisplay">@include('layout.home_product_display')</div>
</div>
<div class="footer">@include('layout.footer')</div>
@endsection
