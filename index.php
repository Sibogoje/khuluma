<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Khuluma Eswatini</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <?php include "imports.php"; ?>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, rgb(26, 30, 32), rgb(132, 30, 2));
      color: #fff;
      text-align: center;
    }

    .hero {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: rgb(88, 81, 81);
      padding: 20px;
    }

    .hero h1 {
      font-size: 3em;
      margin-bottom: 0.5em;
    }

    .hero p {
      font-size: 1.2em;
      margin-bottom: 20px;
    }

    .quick-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 40px;
    }

    .quick-links a {
      color: #fff;
      text-decoration: none;
      font-size: 1.1em;
      padding: 10px 20px;
      border: 2px solid #fff;
      border-radius: 5px;
      transition: background 0.3s, color 0.3s;
    }

    .quick-links a:hover {
      background: #fff;
      color:rgb(255, 255, 255);
    }

    h3{
      font-weight: bold;
      font-size: 40px;
    }

    .featured-clients {
      background: #fff;
      padding: 20px;
    }

    .featured-clients h2 {
      font-size: 2em;
      margin-bottom: 20px;
      color: red;
    }

    .featured-clients img {
      max-width: 100px;
      margin: 10px;
    }


    .navbar-brand,
.navbar-brand:hover {
  color:rgb(255, 255, 255);
  font-size: 30px;
  font-weight: 600;
  text-transform: uppercase;
}
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    <?php include "header.php"; ?>
    <!-- end header section -->

    <section class="slider_section">
      <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3 col-lg-2 offset-md-2">
                  <div class="detail-box">
                    <h3>
                      Our Commitment
                    </h3>
                    <p>
                      We write stories that reflect the power of your brand
                    </p>
                  </div>
                </div>
                <div class="col-md-7 col-lg-8">
                  <div class="img-box">
                    <img src="images/hero.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 col-lg-2 offset-md-2">
                  <div class="detail-box">
                    <h1>
                      Work Ethic
                    </h1>
                    <p>
                      Result Oriented
                    </p>
                  </div>
                </div>
                <div class="col-md-7 col-lg-6">
                  <div class="img-box">
                    <img src="images/round.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 col-lg-2 offset-md-2">
                <div class="detail-box">
                <h3>
                    Fluid Communication
                </h3>
                <p>
                    We understand that every brand has unique communication needs. Our approach is flexible and adaptive, ensuring that we meet your specific requirements effectively.
                </p>
            </div>
            </div>
                <div class="col-md-7 col-lg-8">
                  <div class="img-box" >
                    <img src="images/graph.png" alt="" style="max-width: 50%;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
  </div>
  </div>


  <!-- slider courasel area -->






  <!-- custom menu -->
  <?php include "menu.php"; ?>
  <!-- custom menu -->

  <!-- Hero Section -->
  <div class="hero">
    <img src="../logo_icon.png" alt="Logo" class="logo" style="max-width: 150px; margin-bottom: 20px;">
    <h1>Shaping Narratives, Building Trust</h1>
    <p>We connect brands with their audience through innovative strategies and creative solutions.</p>
    <div class="quick-links">
      <a href="About Us.php">About Us</a>
      <a href="Our Services.php">Services</a>
      <a href="Contact Us.php">Contact Us</a>
    </div>
  </div>

  <!-- Featured Clients Section -->
  <div class="featured-clients">
    <h2 style="font-weight: bold;">Featured Clients & Partners</h2>
    <!-- Display logos of past & current partners -->
    <img src="images/limkokwing.jpg" alt="Client 1">
    <!-- <img src="client_logo2.png" alt="Client 2">
    <img src="client_logo3.png" alt="Client 3"> -->
    <!-- Add more client logos as needed -->
  </div>

  <!-- footer section -->
  <?php include "footer.php"; ?>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>