<!-- Footer -->
<div class="container-fluid text-center ">
  <div class="row no-gutters g-min-height-80vh">
   
    <div class="col-md-12 col-lg-4 g-min-height-400">
      <iframe
        class="gmap_iframe"
        width="100%"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
        src="https://maps.google.com/maps?width=400&amp;height=400&amp;hl=en&amp;q=baisdhara, 
          kathmandu&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
      ></iframe>
    </div>
    <!-- End Google Map -->

    <!-- Footer Content -->
    <div class="col-md-6 col-lg-4 d-flex g-bg-primary g-pa-40">
      <div class="align-self-center">
        <header class="u-heading-v8-2 g-mb-40">
          <h2
            class="u-heading-v8__title g-color-white text-uppercase g-font-weight-700 g-mb-0"
          >
            <strong
              class="g-font-size-12 g-bg-black-opacity-0_9 g-mb-20 whitecolor"
              >Our Contacts</strong
            >

            <br />

            <span class="g-color-black-opacity-0_9 whitecolor"
              >Get in touch</span
            >
          </h2>
        </header>

             @foreach($basicinfo_array as $item)
        <div class="lead g-font-weight-400 g-mb-40 whitecolor">
          <p>
            {{ $item['footer_des'] }}
          </p>
        </div>

        <address class="text-uppercase g-line-height-2 g-mb-40">
          <p class="whitecolor">
            Email:
            <aclass="g-color-white whitecolor" href="mailto:marketing@unify.com">
              <strong> {{ $item['email'] }}</strong></a >
          </p>

          <p class="whitecolor">
            Phone number:
            <strong class="g-color-white whitecolor">+977 {{ $item['phone'] }}</strong>
          </p>

          <p class="whitecolor">
            Address:
            <strong class="g-color-white whitecolor"> {{ $item['addredd'] }}</strong>
          </p>
        </address>
      @endforeach
      </div>
    </div>
    <!-- End Footer Content -->

    <!-- Footer Content -->
    <div class="col-md-6 col-lg-4 d-flex g-bg-black-opacity-0_9 g-pa-40">
      <div class="align-self-center w-100">
         <a  href="{{ route('home') }}"
        ><img id="footer_img" src="<?php echo asset('assets/image/logo.png') ?>" alt="" style="width:300px;"
      /></a>
      </div>
    </div>
    <!-- End Footer Content -->
  </div>
</div>
<!-- Footer -->

<!-- Copyright -->
<footer class="text-center g-py-40">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-md-left g-mb-20 g-mb-0--md"></div>

      <div class="col-md-6 align-self-center text-md-right">
        <small class="g-font-size-default whitecolor"
          >© 2023 All right reserved. 
        </small>
      </div>
    </div>
  </div>
</footer>
<!-- End Copyright -->
