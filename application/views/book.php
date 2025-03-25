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

  .conn h4 {
    font-size: 26px;
  }

  .car{
  margin-left: 5px;
   height: 1px;
   width: 15px;
   background-color:#D4030C ;
}

  .contentt {
    display: none;

  }

 
  .login-container {
    width: 80%;

    padding: 20px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin: 5% auto 0;
  }

  .login-container h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #5D4037;
  }

  .form-group {
    margin-bottom: 1px;
    text-align: left;
  }

  .form-group label {
    display: block;
    font-size: 14px;
    color: #5D4037;
    margin-bottom: 5px;
  }

  .form-group input {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: #d5dbda;
    outline: none;

  }
  .form-group textarea {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: #d5dbda;
    outline: none;

  }

  .form-group input:focus {
    border-color: #5D4037;
  }
  .form-group textarea:focus {
    border-color: #5D4037;
  }

  .login-btn {
    width: 50%;
    padding: 10px;
    font-size: 16px;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 27px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .login-btn:hover {
    background-color: #45a049;
  }

  .forgot-password {
    display: block;
    margin-top: 10px;
    font-size: 12px;
    color: #5D4037;
    text-decoration: none;
    text-align: end;
  }

  .forgot-password:hover {
    text-decoration: underline;
  }

  .social-login {
    margin-top: 20px;
  }

  .social-login a {
    display: inline-block;
    margin: 0 10px;
    font-size: 16px;
  }

  .signup-link {
    margin-top: 15px;
    font-size: 14px;
    color: #5D4037;
  }

  .signup-link a {
    color: #4CAF50;
    text-decoration: none;
  }

  .signup-link a:hover {
    text-decoration: underline;
  }
  @media (max-width: 768px) {
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 100%;
      height: auto;
    }
    .login-container {
      width: 100%;
    }
    .login-container form {
     padding: 0% 0 !important;
    }
    .login-btn {
      width: 80%;
    }
    .nslider {
      max-width: 90%;
      margin: auto;
    }

    .ntest {
      max-width: 95%;
      margin: auto;
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


    .p-mob {
      padding-left: 0;
      align-items: start;
    }

    .n123 {
      max-width: 95%;
      margin: auto;
    }
  }

</style>
<main id="main">
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center main-banner">
    <div class="mm_bg" style="width: 100%;background-image: url('assets/img/book.png');background-size: cover;   ">
      <div class="content" style="top: 0%;color:#fff;    width: 100%;    padding: 10%;height: 100%;">
        <div class="row" style="  height: 100%;  align-items: center;">
          <div class="col-md-12 text-center">

            <p style="margin-bottom: 0;">You need to</p>
            <h1>Explore Beautiful India </h1>
          </div>
          <div class="col-md-12">
            <div class="login-container">
              <h4 style="color:#421715;">Book Now</h4>
              
              <form method="POST" action="Job_form" style="padding: 0 10%;">
                <div class="row">
                  <div class="col-md-6 mt-3 form-group">
                    <label for="username">Name</label>
                    <input type="text" id="username" name="name" placeholder="Type Your Name" required>
                  </div>
                  <div class="col-md-6 mt-3 form-group">
                    <label for="username">Mobile</label>
                    <input type="text"  name="mobile" placeholder="Type Your Mobile" required>
                  </div>
                  <div class="col-md-12 mt-3 form-group">
                    <label for="username">Email</label>
                    <input type="email"  name="email" placeholder="Type Your Email" required>
                  </div>
                  <div class="col-md-6 mt-3 form-group">
                    <label for="username">Number Of Adults</label>
                    <input type="text"  name="adults" placeholder="Type Your Members" required>
                  </div>
                  <div class="col-md-6 mt-3 form-group">
                    <label for="username">Number Of Children</label>
                    <input type="text"  name="children" placeholder="Type Your Children" required>
                  </div>
                  <div class="col-md-12 mt-3 form-group">
                    <label for="username">Description</label>
                    <textarea class="form-control" id="dis" name="dis" rows="3" placeholder="Type Your Description" required></textarea>
                  </div>
                </div>


                <button type="submit" class="login-btn mt-3">Submit</button>
              </form>

            </div>
          </div>
          <div class="col-md-12 d-none">
            <div class="blorr row mt-md-5 mt-2 "
              style="border-radius:14px;background: #FFFAF51F;    backdrop-filter: blur(30px);padding:20px;margin-left:0; margin-right: 0;    justify-content: space-around;">
              <div class="col-md-3 col-6" style="border-right: 2px solid #fff;">
                <h6 class="col-12">Destination</h6>
                <p class="col-12 d-flex m-0"><span style="padding-right: 5%;display: grid;"><img
                      src="assets/img/map.png" alt></span> Center Point, Lo... </p>
              </div>
              <div class="col-md-5 row col-6" style="border-right: 2px solid #fff;">
                <div class="col-md-6">
                  <h6 class="col-12">Check-in</h6>
                  <p class="col-12 d-flex m-0"><span style="padding-right: 5%;display: grid;"><img
                        src="assets/img/map.png" alt></span> sat 29 Nov 2024</p>
                </div>
                <div class="col-md-6">
                  <h6 class="col-12">Check-Out</h6>
                  <p class="col-12 d-flex m-0"><span style="padding-right: 5%;display: grid;"><img
                        src="assets/img/map.png" alt></span> Fri 06 Dec 2024</p>
                </div>


              </div>
              <div class="col-md-3 row col-6">
                <div class="col-md-6">
                  <h6 class="col-12">Guest</h6>
                  <p class="col-12 d-flex m-0">2 Guest</p>
                </div>
                <div class="col-md-6 ">
                  <a class="scrollto" href="<?php echo base_url(); ?>" style="border-bottom:none;">
                    <button style=" border:none; border-radius:27px; min-width:150px;" class="btn btn-primary">Book Now </button>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>




      </div>
    </div>


  </section><!-- End Hero -->
  <!-- ======= About Section ======= -->




</main><!-- End #main -->



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->