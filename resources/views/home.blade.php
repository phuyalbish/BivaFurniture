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
        <img src="<?php echo asset('assets/image/frgsofa.png')?>" alt="" />
      </div>
      <div class="maininfo">
        <h1>
          BIVA FURNITURE FOR<br />
          YOUR HOME
        </h1>
        <h3>YOUR LUXURY STARTS HERE</h3>
        <button class="buttonmaininfo">Learn More</button>
      </div>
    </div>
  </div>

  <div class="fearures">
    <div class="fearture1 innerfeature">
      <img
        src="<?php echo asset('assets/image/face-smile-solid.svg')?>"
        alt=""
        class="fearureimage"
      />
      <h3>Comfort</h3>
      <p>

        <div id="animatemaininfo"><h1>Whaat</h1></div>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio
        voluptate, est omnis inventore porro, numquam aspernatur quasi quaerat
        iure eligendi impedit. Iste distinctio quae aliquid dolor natus
        voluptate repellat earum.
      </p>
    </div>
    <div class="fearture2 innerfeature">
      <img
        src="<?php echo asset('assets/image/crown-solid.svg')?>"
        alt=""
        class="fearureimage"
      />
      <h3>Luxury</h3>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio
        voluptate, est omnis inventore porro, numquam aspernatur quasi quaerat
        iure eligendi impedit. Iste distinctio quae aliquid dolor natus
        voluptate repellat earum.
      </p>
    </div>
    <div class="fearture3 innerfeature">
      <img
        src="<?php echo asset('assets/image/heart-solid.svg')?>"
        alt=""
        class="fearureimage"
      />
      <h3>Beauty</h3>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio
        voluptate, est omnis inventore porro, numquam aspernatur quasi quaerat
        iure eligendi impedit. Iste distinctio quae aliquid dolor natus
        voluptate repellat earum.
      </p>
    </div>
  </div>
</div>

<div class="home_midcontent">


    <div class="productdisplay">@include('layout.home_product_display')</div>
</div>
<div class="footer">@include('layout.footer')</div>
@endsection
