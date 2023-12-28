<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

  .chart {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    width: 300px;
    height: 200px;
    border: 1px solid #ccc;
  }

  .bar {
    width: 30px;
    background-color: #3498db;
    margin: 0 10px;
    transition: height 0.5s;
  }

  .bar:hover {
    height: 100px;
    /* Adjust the height as needed */
  }

  .label {
    text-align: center;
    margin-top: 5px;
    color: black;
  }

  .section-title-w p {
    color: #fff;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
  }
</style>


<!-- ======= Hero Section ======= -->
<section class="d-flex flex-column justify-content-end align-items-center mainb">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title-w">
          <h2>Portfolio</h2>
          <p>Our Company</p>
        </div>
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Portfolio</h2>
        <p>Our Financial Performance</p>
      </div>


      <canvas id="myChart"></canvas>
    </div>
  </section><!-- End Team Section -->

  

  <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Our Certifications</h2>

      </div>

      <div class="row content" data-aos="fade-up"style="    justify-content: space-around;">
        <div class="col-md-5 pt-4 pt-lg-0">
          <img src="assets/img/11.PNG" width="100%" alt="">
        </div>
        
        <div class="col-md-5 pt-4 pt-lg-0">
          <img src="assets/img/12.PNG" width="100%" alt="">
        </div>
        
        

      </div>

    </div>
  </section><!-- End About Section -->

</main><!-- End #main -->
<script>


var ctx = document.getElementById('myChart').getContext('2d');

// Define chart data
var data = {
    labels: ['2018-19', '2019-20', '2020-21', '2021-22', '2022-23'],
    datasets: [{
        label: 'Turnover of last 5 Years',
        data: [188.4, 223, 150, 231, 321],
        backgroundColor: ['#3498db','#3498db', '#e74c3c', '#2ecc71','#2ecc71'],
        barThickness: 70 // Adjust the bar width here
    }]
};

// Configure the chart
var options = {
    responsive: true,
    scales: {
        y: {
            beginAtZero: true,
            // Add a callback function to format Y-axis labels in millions
            title: {
                display: true,
                text: 'Amount in Million',
                font: {
                    size: '30.5rem' // Adjust the font size here (equivalent to h4)
                }
            }
        },
        x: {
            // Display financial years on the X-axis
            title: {
                display: true,
                text: 'Financial Year',
                font: {
                    size: '30.5rem' // Adjust the font size here (equivalent to h4)
                }
            }
        }
    }}

// Create the chart
var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});


  var splide = new Splide('.splide', {
    perPage: 8,
    perMove: 2,
    gap: 20,
    rewind: true,
    autoplay: true, // Enable auto-sliding
    breakpoints: {
      768: {
        perPage: 2, // Change perPage to 2 on screens >= 768px
      },
      576: {
        perPage: 1, // Change perPage to 1 on screens >= 576px
      }
    }
  });

  splide.mount();
</script>