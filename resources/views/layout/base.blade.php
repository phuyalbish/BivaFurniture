
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lobster"
    />
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300&display=swap" rel="stylesheet"> 
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Monomaniac One"
    />
    <link
      rel="icon"
      type="image/x-icon"
      href="<?php echo asset('assets/image/logo.png')?>"
    />
    <title>@yield('title') | Biva Furniture</title>

    <link rel="stylesheet" href="<?php echo asset('assets/css/style.css')?>" />
    <link rel="stylesheet" href="<?php echo asset('assets/css/footerstyle.css')?>" />
    <link rel="stylesheet" href="<?php echo asset('assets/css/homestyle.css')?>" />
    <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />




  </head>
  <body style="padding: 0px">
    <div class="maincontent">@yield('maincontent')</div>
  </body>

  <!-- JS Implementing Plugins -->
  <!-- <script src="../../../assets/vendor/gmaps/gmaps.min.js"></script> -->

  <!-- JS Unify -->
  <!-- <script src="../../../assets/js/components/gmap/hs.map.js"></script> -->

  <!-- JS Plugins Init. -->
  <script>
    // initialization of google map
    function initMap() {
      $.HSCore.components.HSGMap.init(".js-g-map");
    }
  </script>

  <script
    src="//maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&amp;callback=initMap"
    async=""
    defer=""
  ></script>
  <script
    type="text/javascript"
    src="https://unpkg.com/sheryjs/dist/Shery.js"
  ></script>
  <!--  Gsap is needed for Basic Effects -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <!-- Scroll Trigger is needed for Scroll Effects -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- Three.js is needed for 3d Effects -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.155.0/three.min.js"></script>

  <!-- ControlKit is needed for Debug Panel -->
  <script src="https://cdn.jsdelivr.net/gh/automat/controlkit.js@master/bin/controlKit.min.js"></script>
  <script src="<?php echo asset('js/script.js')?>"></script>
</html>
