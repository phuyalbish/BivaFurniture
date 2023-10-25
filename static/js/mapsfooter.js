<!-- JS Implementing Plugins -->
<script  src="../../../assets/vendor/gmaps/gmaps.min.js"></script>

<!-- JS Unify -->
<script  src="../../../assets/js/components/gmap/hs.map.js"></script>

<!-- JS Plugins Init. -->
<script >
  // initialization of google map
  function initMap() {
    $.HSCore.components.HSGMap.init('.js-g-map');
  }
</script>

<script  src="//maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&amp;callback=initMap" async="" defer=""></script>