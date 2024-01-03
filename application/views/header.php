<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>3 Desire Networks</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
/* .navbar:active{
  background: red;
} */
.navbar a:hover{
  color:white !important;
}
.navbar li .active{

}
</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-scrolled  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
       <a href="<?php echo base_url(); ?>">
        <img src="assets/img/3dn.png" alt="" class="img-fluid">
       </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="<?php echo base_url(); ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('About'); ?>">About</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('Services'); ?>">Services</a></li>
          <li><a class="nav-link scrollto " href="<?php echo base_url('Portfolio'); ?>">Portfolio</a></li>
        
          <li><a class="nav-link scrollto" href="<?php echo base_url('Career'); ?>"> Career</a></li>
        
          <li><a class="nav-link scrollto" href="<?php echo base_url('Contact'); ?>">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <script>
    $(document).ready(function(){
  var head = document.getElementsByClassName("navbar")[0];
  var activeTab = head.getElementsByTagName("a");
  for (var i = 0; i < activeTab.length; i++){
    $(activeTab[i]).click(function(){
      var tab = document.getElementsByClassName("active");
      tab[0].className = tab[0].className.replace("active", "");
      this.className += "active";
    });
  }
});
  </script><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 