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
        <h2 class="g-color-white text-uppercase g-font-weight-700 g-mb-50 whitecolor">
          Have a Question?</span>
        </h2>

        <form>
          <div class="form-group g-mb-10">
            <input
              class="form-control g-color-white g-bg-black-opacity-0_4 g-brd-black-opacity-0_4 g-brd-primary--focus rounded-0 g-pa-15"
              type="text"
              placeholder="Your name"
            />
          </div>
          <div class="form-group g-mb-10">
            <input
              class="form-control g-color-white g-bg-black-opacity-0_4 g-brd-black-opacity-0_4 g-brd-primary--focus rounded-0 g-pa-15"
              type="tel"
              placeholder="Your phone"
            />
          </div>
          <div class="form-group g-mb-10">
            <input
              class="form-control g-color-white g-bg-black-opacity-0_4 g-brd-black-opacity-0_4 g-brd-primary--focus rounded-0 g-pa-15"
              type="text"
              placeholder="Subject"
            />
          </div>
          <div class="form-group g-mb-40">
            <textarea
              class="form-control g-resize-none g-color-white g-bg-black-opacity-0_4 g-brd-black-opacity-0_4 g-brd-primary--focus rounded-0 g-pa-15"
              rows="5"
              placeholder="Message"
            ></textarea>
          </div>
          <button class="btn btn-md u-btn-primary g-font-size-12 text-uppercase rounded-0 g-py-11 g-px-30" 
            role="button">
            Send Message
          </button>
        </form>
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
