<!-- ======= Hero Section ======= -->
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Splide CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/css/splide.min.css">

<!-- Splide JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/js/splide.min.js"></script>
<style>
  .sppp1 .splide__arrows {
    display: none;
  }

  .new-font {
    font-size: 54px;
  }
.conn h4{
  font-size: 26px;
}
  .ho {
    border-bottom: 1px solid #D4030C;
  }

  .swiper {
    width: 100%;
    padding-top: 0px;
    padding-bottom: 10px;
  }

  .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 300px;
    height: 300px;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
  }

  .swiper-slide {
    transition: transform 0.4s ease, z-index 0.4s ease;
    /* Smooth transition for all slides */
  }

  /* Style for the active slide */
  .swiper-slide-active {
    transform: scale(1.5) translateY(30px);
    z-index: 10;
    border-radius: 22px;
    background-color: #ffffff;
    width: 400px;
    height: fit-content;
  }

  .contentt {
    display: none;

  }

  .swiper-slide-active .contentt {
    display: block;
    text-align: center;
  }

  /* Style for adjacent slides (next and previous) */
  .swiper-slide-next,
  .swiper-slide-prev {
    transform: scale(0.9);
    /* Slightly smaller */
    z-index: 5;
    /* Ensure they're behind the active slide */
    opacity: 1;
    /* Dimmed effect for adjacent slides */
  }

  /* Style for non-visible slides */
  .swiper-slide {
    opacity: 1;
    /* Make non-active slides less visible */
  }

  .nslider {
    max-width: 90%;
    margin: auto;
  }

  @media (max-width: 768px) {
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 100%;
      height: auto;
    }

    .nslider {
      max-width: 90%;
      margin: auto;
    }

    .ntest {
      max-width: 95%;
      margin: auto;
    }

    .swiper-slide-active {
      transform: scale(1.5) translateY(30px);
      /* Enlarged and moved slightly downward */
      z-index: 10;
      border-radius: 22px;
      /* Optional rounded corners */
      background-color: #ffffff;
      /* Background for better emphasis */
      width: 101%;
      height: fit-content;
    }

    .new-font {
      font-size: 48px;
    }

    .sppp1 .content {
      left: 4% !important;
      bottom: 4% !important;
    }

    .conn {
      position: relative !important;

    }

    .conn .main {
      padding: 20px !important;

    }

    .mob-w {

      max-width: 100% !important;
      color: black !important;
    }

    .mm_bg {
      background-color: #000;
    }

    .mySwiper h5 {
      font-size: 11px !important;
      color: black;
      margin-bottom: 1px;
    }

    .mySwiper p {
      font-size: 10px !important;
      margin-bottom: 0;
    }
    .testimonials .testimonial-item{
      margin: 10px 10px ;
    }
    #about {
      padding-bottom: 10px !important;
    }
    .p-mob{
padding-left: 0;
align-items: start;
    }
    .n123{
      max-width: 95%;
      margin: auto;
    }
  }
</style>
<main id="main">
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center main-banner">
    <div class="mm_bg" style="width: 100%;">
      <img class="desk" src="assets/img/main.png" alt width="100%" style="    position: relative;">
      <img class="mob" src="assets/img/mob_mm.png" alt width="100%" style="position: relative; opacity: 0.7;">
      <div class="content" style="position: absolute;bottom: 30%;left: 5%;color:#fff;">
        <h1>Embrace the Spirit of <span style="font-family: 'Samarkan', sans-serif;font-weight:300;"> India</span></h1>
        <h2 class="desk" style="font-size:38px;">Stories, Culture, and Adventure Await</h2>
        <h2 class="mob">Stories, Culture, and Adventure Await</h2>
        <div class="blorr row mt-md-5 mt-2 desk "
          style="border-radius:14px;background: #FFFAF51F;    backdrop-filter: blur(30px);padding:20px;margin-left:0; margin-right: 0;">
          <div class="col-md-6 col-6" style="border-right: 2px solid #fff;">
            <h6 class="col-12">Where</h6>
            <p class="col-12 d-flex m-0">Center Point, Lo... <span style="padding-left: 10%;display: grid;"><img
                  src="assets/img/map.png" alt></span></p>
          </div>
          <div class="col-md-6 row col-6">
            <div class="col-md-8">
              <h6 class="col-12">Date</h6>
              <p class="col-12 d-flex m-0">09th March,2021</p>
            </div>
            <div class="col-md-4 desk">
              <img src="assets/img/serch.png" alt>
            </div>

          </div>
        </div>
        <div class="mob">
          <a class="scrollto mt-1" href="<?php echo base_url(); ?>">
            <button
              style="border:none;border-radius:27px;min-width: 90px;font-size: 10px;padding: 5px;"
              class="btn btn-primary">Book Now <img src="assets/img/arrow.png" style="width:11px;" alt=""></button>

          </a>
        </div>
      </div>
    </div>


  </section><!-- End Hero -->
  <!-- ======= About Section ======= -->
  <section id="about" class="about" style="padding-bottom:0px;">
    <div class="nslider">
      <div class="row">
        <div class="col-md-8 col-6">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide text-center">
                <img src="assets/img/spl/1.png" />

                <div class="contentt mt-1">
                  <h5>Enchanting Rajasthan </h5>
                  <p>15 Days</p>
                </div>

              </div>

              <div class="swiper-slide">
                <img src="assets/img/spl/3.png" />

                <div class="contentt">
                  <h5>Enchanting Rajasthan </h5>
                  <p>15 Days</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/spl/4.png" />
                <br>
                <div class="contentt">
                  <h5>Enchanting Rajasthan </h5>
                  <p>15 Days</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/spl/5.png" />
                <br>
                <div class="contentt">
                  <h5>Enchanting Rajasthan </h5>
                  <p>15 Days</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/spl/1.png" />
                <br>
                <div class="contentt">
                  <h5>Enchanting Rajasthan </h5>
                  <p>15 Days</p>
                </div>
              </div>

              <div class="swiper-slide">
                <img src="assets/img/spl/3.png" />
                <br>
                <div class="contentt">
                  <h5>Enchanting Rajasthan </h5>
                  <p>15 Days</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/spl/4.png" />
                <br>
                <div class="contentt">
                  <h5>Enchanting Rajasthan </h5>
                  <p>15 Days</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/spl/5.png" />
                <br>
                <div class="contentt">
                  <h5>Enchanting Rajasthan </h5>
                  <p>15 Days</p>
                </div>
              </div>

            </div>

          </div>


        </div>
        <div class="col-md-4 col-6 align-content-center d-flex p-mob" style="    align-items: start;">
          <div class="desk "  style="padding-top:16% ;">
            <h3 class="text-center" style="color:#421715; font-weight:600;font-size:26px;">1000+
              Small Group Adventures</h3>
            <p style="color:#421715;font-size:14px;" class="text-center">Embark on immersive
              adventures through India's vibrant culture,
              breath taking landscapes, and rich traditions.</p>
            <div class="text-center mt-0">
              <a href>
                <button class="btn btn-primary btn1">EXPLORE OUR TOURS</button>
              </a>
            </div>
          </div>
          <div class="mob " style="    margin-top: 20px;">
            <h3 class="text-center" style="color:#421715; font-weight:600;font-size:11px !important;">1000+
              Small Group Adventures</h3>
            <p style="color:#421715;font-size:8px !important;    margin-bottom: 5px;" class="text-center">Embark on immersive
              adventures through India's vibrant culture,
              breath taking landscapes, and rich traditions.</p>
            <div class="text-center mt-1">
              <a href>
                <button class="btn btn-primary btn1" style="    padding: 5px 10px;font-size: 7px;">EXPLORE OUR TOURS</button>
              </a>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>

  <section class="about desk">
    <div class="img" style="position: relative;">
      <img src="assets/img/bg2.png" alt width="100%">
      <div class="conn" style="position: absolute;top: 0;width: 100%;height: 100%;">

        <div class="row m-0" style="width: 100%;height: 100%;">
          <div class="col-md-6 main"
            style="background-color: #002D0533;backdrop-filter: blur(28.8px);align-items: center;display: flex;">
            <div class="mob-w" style="max-width:84%;margin:auto;color:#fff;">
              <h1 class="text-start new-font" style="font-family: 'Samarkan', sans-serif; ">Who We Are?</h1>
              <h4 class="text-start">Your Guides to Authentic Indian
                Adventures!</h4>
              <p>Local Adventures India takes you on a journey that experiences
                that reveal the
                richness of India's culture, history, natural beauty, and
                thrilling adventures, fostering deep
                connections and a lasting appreciation for this extraordinary
                region's beauty and diversity. Passionate
                about connecting you with India’s rich heritage, we proudly
                promote local businesses and artisans,
                ensuring our tours create unforgettable memories and experience
                while supporting the local economy.
                Committed to sustainable travel, we strive to leave a positive
                impact on the communities we visit.</p>
              <div class="text-start mt-3">
                <a href>
                  <button class="btn btn-primary btn1">LEARN MORE</button>
                </a>
              </div>
            </div>

          </div>
          <div class="col-md-6">

          </div>
        </div>

      </div>
    </div>

  </section>
  <div class="mob" style="    background-image: url('assets/img/bg2.png');background-size: cover;">
    <div class="img" style="position: relative;">

      <div class="">

        <div class="row m-0" style="width: 100%;height: 100%;">
          <div class="col-md-6 col-8 main"
            style="background-color: #002D0533;backdrop-filter: blur(28.8px);align-items: center;display: flex;padding: 10% 1% 10% 5%;">
            <div class="" style="max-width:100%;margin:auto;color:#fff;">
            <h1 class="text-start new-font" style="font-family: 'Samarkan', sans-serif;font-size: 18px; ">Who We Are?</h1>
              <h4 class="text-start" style="font-size: 10px;margin-bottom:2px;">Your Guides to Authentic Indian
                Adventures!</h4>
              <p style="font-size: 9px !important;margin-bottom:5px;">Local Adventures India takes you on a journey that
                experiences
                that reveal the
                richness of India's culture, history, natural beauty, and
                thrilling adventures, fostering deep
                connections and a lasting appreciation for this extraordinary
                region's beauty and diversity. Passionate
                about connecting you with India’s rich heritage, we proudly
                promote local businesses and artisans,
                ensuring our tours create unforgettable memories and experience
                while supporting the local economy.
                Committed to sustainable travel, we strive to leave a positive
                impact on the communities we visit.</p>
              <div class="text-start ">
                <a href="">
                  <button class="btn btn-primary btn1" style="    padding: 5px 15px;font-size: 7px;">LEARN
                    MORE</button>
                </a>
              </div>
            </div>

          </div>
          <div class="col-md-6">

          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div data-aos="zoom-out" class="text-center title desk">
        <h1 style="color: #000;">Featured Tours</h1>
        <p style="color: #000;">Your Next Great Story Begins with Our Featured Tours</p>
      </div>
      <div data-aos="zoom-out" class="text-center title mob">
        <h1 class="m-0" style="color: #421715;font-size:14px !important;margin-bottom:4px !important;">Featured Tours</h1>
        <p style="color: #421715; font-size:9px !important;">Your Next Great Story Begins with Our Featured Tours</p>
      </div>

      <div class="n123" style="">
        <div class="row mob_s" >

          <div class="col-md-4 col-6 mt-md-3 mt-1" data-aos="zoom-in-up">
            <a href="<?php echo base_url('Destinations'); ?>">
              <div class="mob_bgg" style="position: relative;background: black;">
                <img src="assets/img/ser/ser5.png" alt width="100%">
                <div class="over">
                  <div class="mob_black" style="color:#fff;">
                    <h4 class="title">Golden Triangle Of India</h4>
                    <p class>Discover India’s Enchanting Winter Wonderland</p>
                  </div>

                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-6 mt-md-3 mt-1" data-aos="zoom-in-up">
            <a href="<?php echo base_url('Destinations2'); ?>">
              <div class="mob_bgg" style="position: relative;background: black;">
                <img src="assets/img/ser/ser6.png" alt width="100%">
                <div class="over">
                  <div class="mob_black" style="color:#fff;">
                    <h4 class="title">Premium South India</h4>
                    <p class>Enter the Kingdom of Vibrant Traditions</p>
                  </div>

                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-6 mt-md-3 mt-1" data-aos="zoom-in-up">
            <div class="mob_bgg" style="position: relative;background: black;">
              <img src="assets/img/ser/ser1.png" alt width="100%">
              <div class="over">
                <div class="mob_black" style="color:#fff;">
                  <h4 class="title">Uttar Pradesh</h4>
                  <p class>Revel in the Historical Richness of Awadh</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-md-3 mt-1" data-aos="zoom-in-up">
            <div class="mob_bgg" style="position: relative;background: black;">
              <img src="assets/img/ser/ser2.png" alt width="100%">
              <div class="over">
                <div class="mob_black" style="color:#fff;">
                  <h4 class="title">Madhya Pradesh</h4>
                  <p class>Journey Through the Land of Temples</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-md-3 mt-1" data-aos="zoom-in-up">
            <div class="mob_bgg" style="position: relative;background: black;">
              <img src="assets/img/ser/ser3.png" alt width="100%">
              <div class="over">
                <div class="mob_black" style="color:#fff;">
                  <h4 class="title">Himachal Pradesh</h4>
                  <p class>Journey to the Land of Majestic Mountains</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-md-3 mt-1 "data-aos="zoom-in-up">
            <div class="mob_bgg" style="position: relative;background: black;">
              <img src="assets/img/ser/ser4.png" alt width="100%">
              <div class="over">
                <div class="mob_black" style="color:#fff;">
                  <h4 class="title">Kerala</h4>
                  <p class>Experience the Serenity of Backwaters and Beaches</p>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section -->
  <section class="icons desk">
    <div class="row">
      <aside class="count-block">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-6 col-md-3 col-6 block-1">
              <div class="holder">
                <img src="assets/img/icon1.png" alt width="25"><br>
                <span class="info"><span class="counter">8702</span></span>
                <span class="txt">WILDLIFE SPECIES</span>
              </div>
            </div>

            <div class="col-xs-6 col-md-3 col-6 block-2">
              <div class="holder">
                <img src="assets/img/icon2.png" alt width="25"><br>
                <span class="info"><span class="counter">378</span></span>
                <span class="txt">ARCTIC EXPERIENCES</span>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 col-6 block-3">
              <div class="holder">
                <img src="assets/img/icon3.png" alt width="25"><br>
                <span class="info"><span class="counter">377</span></span>
                <span class="txt">NATIONAL PARKS</span>
              </div>
            </div>

            <div class="col-xs-6 col-md-3 col-6 block-4">
              <div class="holder">
                <img src="assets/img/icon4.png" alt width="25"><br>
                <span class="info"><span class="counter">8973</span></span>
                <span class="txt">DAYS IN THE WILD</span>
              </div>
            </div>

          </div>
        </div>
      </aside>
    </div>
  </section>
  <section class="icons mob">
    <div class="row">
      <aside class="count-block">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-6 col-md-3 col-6 block-1">
              <div class="holder">
                <img src="assets/img/icon1.png" alt width="18"><br>
                <span class="info"><span class="counter">8702</span></span>
                <span class="txt">WILDLIFE SPECIES</span>
              </div>
            </div>

            <div class="col-xs-6 col-md-3 col-6 block-2">
              <div class="holder">
                <img src="assets/img/icon2.png" alt width="18"><br>
                <span class="info"><span class="counter">378</span></span>
                <span class="txt">ARCTIC EXPERIENCES</span>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 col-6 block-4 ">
              <div class="holder">
                <img src="assets/img/icon3.png" alt width="18"><br>
                <span class="info"><span class="counter">377</span></span>
                <span class="txt">NATIONAL PARKS</span>
              </div>
            </div>

            <div class="col-xs-6 col-md-3 col-6 block-3">
              <div class="holder">
                <img src="assets/img/icon4.png" alt width="18"><br>
                <span class="info"><span class="counter">8973</span></span>
                <span class="txt">DAYS IN THE WILD</span>
              </div>
            </div>

          </div>
        </div>
      </aside>
    </div>
  </section>
  <section class="about desk">
    <div class="img" style="position: relative;">
      <img src="assets/img/bg3.png" alt width="100%">
      <div class="conn" style="position: absolute;top: 0;width: 100%;height: 100%;">

        <div class="row m-0" style="width: 100%;height: 100%;">

          <div class="col-md-6">

          </div>
          <div class="col-md-6 main"
            style="background-color: #002D0533;backdrop-filter: blur(28.8px);align-items: center;display: flex;">
            <div class="mob-w" style="max-width:80%;margin:auto;color:#fff;">
              <h1 class="text-end new-font" style=" font-family: 'Samarkan', sans-serif;">OUR Purpose</h1>
              <h4 class="text-end">Travel Responsibly, Explore Sustainably</h4>
              <p class="text-end">We believe in leaving only footprints behind.
                Our tours are designed to support local communities, minimize
                environmental impact, and protect the cultural and natural
                wonders of India. Together, let's explore with purpose and
                protect what matters most.</p>
              <div class="text-end mt-3">
                <a href>
                  <button class="btn btn-primary btn1">LEARN MORE</button>
                </a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </section>
  <div class="mob" style="    background-image: url('assets/img/bg3.png');background-size: cover;">

    <div class="row m-0" style="width: 100%;height: 100%;">

      <div class="col-md-6 col-4">

      </div>
      <div class="col-md-6 col-8 main"
        style="background-color: #002D0533;backdrop-filter: blur(28.8px);align-items: center;display: flex;padding:10% 5%;">
        <div class="" style="max-width:100%;margin:auto;color:#fff;">
        <h1 class="text-end new-font" style=" font-family: 'Samarkan', sans-serif;font-size: 18px;">OUR Purpose</h1>
          <h4 class="text-end" style="font-size:10px;font-weight:400;margin-bottom: 2px;">Travel Responsibly, Explore Sustainably</h4>
          <p class="text-end" style="font-size: 9px !important; font-weight:100;margin-bottom: 5px;color:#fff;    font-weight: 300;">We believe in leaving only footprints behind.
            Our tours are designed to support local communities, minimize
            environmental impact, and protect the cultural and natural
            wonders of India. Together, let's explore with purpose and
            protect what matters most.</p>
           <div class="text-end ">
            <a href="">
              <button class="btn btn-primary btn1" style="    padding: 5px 15px;font-size: 7px;">LEARN MORE</button>
            </a>
          </div> 
        </div>

      </div>
    </div>



  </div>

  <!-- End Testimonials Section -->
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials ">
    <div class="ntest">

      <div data-aos="zoom-out" class="text-center title desk">
        <h1 style="font-family: 'Samarkan', sans-serif;">Testimonial </h1>
        <p style="margin-bottom:0;">Know what our client say about us</p>
      </div>
      <div data-aos="zoom-out" class="text-center title mob">
        <h1 style="font-family: 'Samarkan', sans-serif;margin-bottom: 0px;">Testimonial </h1>
        <p style="margin-bottom:5px;font-size:11px !important;">Know what our client say about us</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testi.png" alt width="100%">
              <h3 class="text-center">Aniruddha Kansara</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Outstanding facility project services, seamlessly executed.
                Their transportation solutions and fiber
                projects exceeded expectations. Truly reliable and efficient!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>

              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testi1.png" alt width="100%">
              <h3 class="text-center">Sam Joshi</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Reliable OSP and fiber project expertise. Telecom infrastructure
                solutions were top-notch. Impressed
                with their manpower solutions – skilled and dedicated.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>

              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testi3.png" alt width="100%">

              <h3 class="text-center">Rajiv Khandelwal</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Exceptional telecom infrastructure solutions. Facility projects
                managed with precision, OSP and fiber
                projects delivered flawlessly. Dependable manpower solutions for
                seamless operations.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>

              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq d-none">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </div>

      <ul class="faq-list">

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What services do you offer for facility
            projects? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
              We provide end-to-end solutions for facility projects, including
              planning, design, construction, and
              maintenance. Our services cover a wide range of facilities,
              ensuring seamless project execution.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Can you elaborate on your
            transportation services?<i class="bi bi-chevron-down icon-show"></i><i
              class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Our transportation services encompass logistics, fleet management,
              and transportation infrastructure
              development. We specialize in optimizing transportation processes
              to enhance efficiency and reduce costs.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">What is OSP in the context of your
            services?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
              OSP refers to Outside Plant services, involving the design and
              implementation of external network
              infrastructure. This includes laying fiber optic cables,
              installing conduits, and establishing
              connectivity between different points.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">How do you approach fiber projects?<i
              class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Our fiber projects involve the deployment of high-speed fiber
              optic networks. We handle everything from
              initial planning and feasibility studies to cable laying,
              splicing, and network testing.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What active infrastructure solutions do
            you provide for telecom projects? <i class="bi bi-chevron-down icon-show"></i><i
              class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Our active infrastructure solutions encompass the deployment of
              telecom equipment, such as antennas, base
              stations, and network controllers. We ensure reliable and
              efficient communication networks for our
              clients.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">What is passive infrastructure in the
            telecom context?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
          </div>
          <div id="faq6" class="collapse" data-bs-parent=".faq-list">
            <p>
              Passive infrastructure involves the physical components that
              support the active equipment, including
              towers, shelters, and power systems. We offer comprehensive
              solutions for the passive elements of telecom
              networks.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section><!-- End F.A.Q Section -->

</main><!-- End #main -->



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    slidesPerView: 6,
    centeredSlides: true, // Center the active slide
    slidesPerView: "auto", // Adjust slide width dynamically
    loop: true, // Enable looping

    coverflowEffect: {
      rotate: 0, // No rotation
      stretch: 0, // Adjust spacing
      depth: 150, // Depth effect for inactive slides
      modifier: 2, // Magnify the active slide
      slideShadows: false, // Disable shadows for simplicity
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true, // Makes pagination bullets clickable
    },
  });
</script>
