
<style>
  *{
    padding:0px;
    margin:0px;
    box-sizing:border-box;
  }
  .navbar-inverse {
    background-color: #7E4136;
    border: none;
    padding-top: 20px;
  }
  .navbar-right li a img {
    width: 20px;
  }
  .navbar-header a img {
    width: 60px;
  }
  .navbar-nav {
    color: #fff;
  }
  .dropdown-menu {
    background-color: white;
  }
</style>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="{{ route('home') }}"
        ><img src="<?php echo asset('assets/image/logo.png') ?>" alt=""
      /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle whitecolor" data-toggle="dropdown" href="#"
            >PRODUCTS<span class="caret"></span
          ></a>
          <ul class="dropdown-menu">
             @foreach($branch_array as $item)
            <li><a href="{{ route('product') }}">{{ $item['name'] }}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{ route('contact') }}">CONTACT</a></li>
        <li><a href="{{ route('aboutus') }}">ABOUT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
             @foreach($basicinfo_array as $item)
          <a href=" {{ $item['link'] }}">
            
            <img src="<?php echo asset('assets/image/instagram.png')?>" alt="" />
          </a>
          @endforeach
        </li>
        <li>

             @foreach($basicinfo_array as $item)
          <a href=""> <p>/ {{ $item['phone'] }}</p></a>
          @endforeach
        </li>
      </ul>
    </div>
  </div>
</nav>
