<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Local Adventure India</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>/assets/img/logo.png" rel="icon">
  <link href="<?php echo base_url(); ?>/assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>/assets/css/style.css?v=1.2" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    .navbar a:hover {
      color: white !important;
    }

    

    .btn1:hover {
      background: #D4030C !important;
      color: white;
     
      border-radius: 7px !important;
     
      cursor: pointer;
      text-transform: uppercase;

      transition: transform 0.2s ease-in-out;

    }
    @media (min-width: 1500px) {
.mob-w{
  margin: auto 2% auto 37% !important;
}
.mob-w1{
  margin: auto 40% auto 2% !important;
}
.mob-w11{
  margin: auto 28% auto 2% !important;
}
.head-w{
  left:19% !important;
}
}
@media (min-width: 1100px) {
.mob-w{
  margin: auto auto auto 31% ;
}
.mob-w1{
  margin: auto 32% auto 2% ;
}
.mob-w11{
  margin: auto 24% auto 2% ;
}
.head-w{
  left:16% ;
}
.mob_pp{
  padding-right: 19% !important;
}
}
    .btn-primary {
      padding: 10px 30px;
      background: linear-gradient(
    130deg,
    rgb(255, 134.15, 0) 0%,
    rgb(212.5, 2.66, 12.32) 100%
  ) !important;
      color: white;
      font-size: 16px;
      cursor: pointer;
      text-transform: uppercase;

      transition: transform 0.2s ease-in-out;

    }
    .btn1 {
      background: linear-gradient(45deg, #ff7e29, #ff2020) !important;
      color: white;
      padding: 5px 30px;
      border: none;
      border-radius: 7px;
      font-size: 16px;
      cursor: pointer;
      text-transform: uppercase;

      transition: transform 0.2s ease-in-out;

    }
    /* Hide desktop navigation on mobile */
    .desktop-nav {
      display: flex;
    }

    .mobile-nav-toggle {
      display: none;
    }

    .mobile-menu {
      display: none;
    }

    .mob {
      display: none;
    }

    .stky .navbar a {
      color: black;
    }

    .stky .mobile-nav-toggle {
      color: black;
    }
    

    p {
      font-size: 15px;
      font-weight: 300;
    }

    @media only screen and (max-width: 768px) {
      .desktop-nav {
        display: none;
        /* Hide desktop nav on mobile */
      }

      .mob {
        display: block;
      }

      .desk {
        display: none;
      }

      .mobile-nav-toggle {
        display: block;
        /* Show mobile toggle */
        font-size: 32px;
        cursor: pointer;
      }

      /* Mobile Side Menu Styles */
      .mobile-menu {
        display: block;
        position: fixed;
        top: 0;
        right: -300px;
        height: 75vh;
        width: 300px;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: right 0.3s ease-in-out;
        z-index: 1000;
      }

      .mobile-menu.active {
        right: 0;
      }

      .mobile-menu-content {
        padding: 20px;
        background: #ffff;
        backdrop-filter: blur(28px);
      }

      .mobile-menu ul {
        list-style: none;
        padding: 0;
      }

      .mobile-menu ul li {
        margin: 15px 0;
      }

      .mobile-menu ul li a {
        text-decoration: none;
        color: #333;
        font-size: 18px;
      }

      .close-btn {
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
        display: block;
        margin-bottom: 20px;
        text-align: right;
      }

      .mob-justi {
        justify-content: space-between;
      }

      #hero .content {
        bottom: 35% !important;
        left: 0% !important;
        color: #fff;
        padding: 15px;
      }
     
    }
    .stky .navbar li:hover a {
      color: black !important;
    }
    .stky .connn {
      color: black !important;
    }
  </style>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-scrolled header-transparent">
    <div class="container">
      <div class="row d-flex align-items-center mob-justi">
      
        <div class="logo col-md-1 col-4 " style="margin:15px 0;">
          <a href="<?php echo base_url(); ?>">
            <img src="assets/img/logo_main.png" alt="" style="max-width:100px;width:100%;" class="img-fluid">
          </a>
        </div>
        <div class="col-md-11 col-4 row " style="padding-right: 0;">
        <div class="col-md-12 mt-1 text-end text-white desk connn">+91 9509712510 / info@localadventures.in</div>
        <nav id="navbar" class="navbar col-md-12 row justify-content-between desktop-nav pl-4 m-0" >
          <ul class="col-md-5 d-flex justify-content-around">
            <li><a class="nav-link scrollto " href="<?php echo base_url(); ?>">Home</a>
          <h1 class="ho"></h1>
          </li>
            
            <li><a class="nav-link scrollto " href="<?php echo base_url('Destinations'); ?>">Destinations</a>
            <h1 class="des"></h1></li>
            <li><a class="nav-link scrollto " href="<?php echo base_url('About'); ?>">About Us</a>
            <h1 class="ab"></h1>
          </li>
            <li class=""><a class="nav-link scrollto " href="<?php echo base_url('Book'); ?>">Contact</a>
            <h1 class="car"></h1></li>
         
          </ul>
          <ul class="col-md-4 d-flex text-end justify-content-end">
            <li style="padding-right:5%;"><a class="scrollto" href="<?php echo base_url('login'); ?>" style="border-bottom:none;">
                <img  src="assets/img/user.png" alt="" width="35">
              </a></li>
            <li><a class="scrollto" href="<?php echo base_url('Book'); ?>" style="border-bottom:none;">
                <button style=" border:none; border-radius:27px; min-width:150px;" class="btn btn-primary">Book Now <img src="assets/img/arrow.png" alt=""></button>
              </a></li>
          </ul>
        </nav>
        <div class="col-12 text-end">
          <i class="bi bi-list mobile-nav-toggle"></i>
        </div>
        </div>

        <!-- Desktop Navigation -->
        
        <!-- Mobile Toggle Button -->

      </div>
    </div>

    <!-- Side Menu -->
    <div id="mobile-menu" class="mobile-menu">
      <div class="mobile-menu-content">
        <span class="close-btn">&times;</span>
        <ul>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url('About'); ?>">About</a></li>
          <li><a href="<?php echo base_url('Destinations'); ?>">Destinations</a></li>
          
          <li ><a href="<?php echo base_url('book'); ?>">Contact</a></li>
         
        </ul>
        <div class="row">
          
        <div class="col-md-6 mt-1 text-start text-black ">+91 9509712510</div>
        <div class="col-md-6 mt-1 text-start text-black ">info@localadventures.in</div>
        </div>
      </div>
    </div>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const mobileToggle = document.querySelector('.mobile-nav-toggle');
      const mobileMenu = document.getElementById('mobile-menu');
      const closeBtn = document.querySelector('.close-btn');

      // Open mobile menu
      mobileToggle.addEventListener('click', function() {
        mobileMenu.classList.add('active');
      });

      // Close mobile menu
      closeBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
      });

      const header = document.getElementById('header');
      const stickyClass = 'stky';

      window.addEventListener('scroll', function() {
        if (window.scrollY > 50) { // Adjust this value as needed
          header.classList.add(stickyClass);
        } else {
          header.classList.remove(stickyClass);
        }
      });

    });
  </script>
  <!-- ======= Hero Section ======= -->

