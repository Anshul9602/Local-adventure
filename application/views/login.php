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
  .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #5D4037;
        }

        .form-group {
            margin-bottom: 15px;
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

        .form-group input:focus {
            border-color: #5D4037;
        }

        .login-btn {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius:27px;
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
</style>
<main id="main">
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center main-banner">
    <div class="mm_bg" style="width: 100%;background-image: url('assets/img/login.png');background-size: cover;">
      
      <div class="content" >
        <div class="coo " style="margin:10%;background:rgba(4, 33, 0, 0.3);    backdrop-filter: blur(30px);">
       

<div class="row">
  <div class="col-md-5" >
    <div style="margin:10%;">
    <div class="login-container">
        <h4 style="color:#421715;">Login</h4>
        <br>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Type Your Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Type Your Password" required>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="login-btn">LOGIN</button>
        </form>

        <div class="social-login">
            <p style="font-size:12px;">Or Sign Up Using</p>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-google"></i></a>
        </div>
<br><br>
        <p class="signup-link"style="font-size:12px;">Or Sign Up Using </p>
        <a href="#" style="color:#000;font-weight:600;">SIGN UP</a>
    </div>
    </div>
 
  </div>
  <div class="col-md-6 d-flex align-content-center " style="align-items: center;">
    <h2 class="text-center text-white" style="font-size: 30px;">Adventure isn’t just about the thrill
    it’s about the paths we choose to tread and the stories we create along the way.</h2>
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

