<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<style>
  .mainb {
    background-image: url(assets/img/ab.jpg);
    background-position: 50% 235%;
    background-size: cover;
    height: 50vh;
  }

  .section-title-w {
    padding-bottom: 40px;
    margin-top: 30vh;
  }

  .section-title-w h2 {
    color: #f1f1f1;
    font-size: 14px;
    font-weight: 500;
    padding: 0;
    margin: 0 0 5px 0;
    letter-spacing: 2px;
    text-transform: uppercase;
  }

  .section-title-w p {
    color: #fff;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
  }
  
</style>


<!-- ======= Hero Section ======= -->
<section class="d-flex flex-column justify-content-end align-items-center mainb">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title-w">
         
      <p>Career</p>
        </div>
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section class="about">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Latest Jobs</h2>

      </div>

      <div class="row content" data-aos="fade-up">
        <div class="col-md-4">
          <div class="card">
            
            <div class="p-3" style="min-height:280px;">
              <div class="row " style="justify-content: space-between;">

                  <div class="col-md-4">
                      <div class="cmp-teaser__pretitle cmp-teaser-region" style="font-weight: 600;">INDIA
                      </div>
                  </div>


                  <div class="col-md-2 text-center">
                      <i class="bi bi-star"></i>
                      <span class="save-job-label" style="font-weight: 600;">
                       
                      </span>
                  </div>

              </div>
              <a href="<?php echo base_url('Project'); ?>">
                  <h4 class="mt-3" style="font-weight: 900;">Project Manager</h4>
              </a>

              <div class="mt-4">
                  <span class="cmp-teaser__job-listing-semibold" style="font-weight: 600;">Business
                      Area : </span> Analysis
              </div>

              <div class="cmp-teaser__job-posted mt-2">
                  <p class="cmp-teaser__job-listing cmp-teaser__job-listing-posted-date">
                      Posted 1 day ago
                  </p>
              </div>


          </div>
          </div>

        </div>
        
      </div>

    </div>
  </section><!-- End About Section -->

 

</main><!-- End #main -->
<script>
  var splide = new Splide('.splide', {
    perPage: 8,
    perMove: 2,
    gap: 20, 
    loop: true,
    autoplay: true, // Enable auto-sliding
    breakpoints: {
      768: {
        perPage: 4, // Change perPage to 2 on screens >= 768px
      },
      576: {
        perPage: 4, // Change perPage to 1 on screens >= 576px
      }
    }
  });

  splide.mount();

</script>