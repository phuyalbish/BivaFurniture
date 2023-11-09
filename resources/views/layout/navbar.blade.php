
<style>
  .navbar-inverse {
    background-color: transparent;
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
    background-color: black;
  }
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button
        type="button"
        class="navbar-toggle"
        data-toggle="collapse"
        data-target="#myNavbar"
      >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"
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
            <li><a href="#">SOFA</a></li>
            <li><a href="#">DINING</a></li>
            <li><a href="#">VASE</a></li>
          </ul>
        </li>
        <li><a href="{{ route('contact') }}">CONTACT</a></li>
        <li><a href="{{ route('aboutus') }}">ABOUT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <img src="<?php echo asset('assets/image/instagram.png')?>" alt="" />
          </a>
        </li>
        <!-- 
        <li>
          <a href="#">
            <img src="{% static 'images/facebook.png'  %}" alt="" />
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{% static 'images/twitter.png'  %}" alt="" />
          </a>
        </li> -->
        <li>
          <a href=""> <p>/ 9840234923</p></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
