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

  <title>Contact Us</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <?php include "imports.php"; ?>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php 
    include "header.php";
    ?>
    <!-- end header section -->


  </div>

  <!-- custom menu -->
  <?php 
  include "menu.php";
  ?>

  <!-- custom menu -->


  <!-- contact section -->

  <section class="contact_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
          <h2 class="custom_heading">Contact Us</h2>
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Pone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex  mt-4 ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/contact.jpg" alt="" class="w-100" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding-top layout_padding2-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_links pl-lg-5">
            <h4>
              Menu
            </h4>
            <ul>
              <li>
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="about.html">
                  About
                </a>
              </li>
              <li>
                <a class="" href="portfolio.html">Portfolio </a>
              </li>
              <li>
                <a class="" href="service.html">Services</a>
              </li>
              <li class="active">
                <a href="contact.html">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h4>
              Location
            </h4>
            <div>
              <img src="images/location.png" alt="" />
              <p>
                104 loram ipusm
              </p>
            </div>
            <div>
              <img src="images/telephone.png" alt="" />
              <p>
                ( +01 1234567890 )
              </p>
            </div>
            <div>
              <img src="images/envelope.png" alt="" />
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h4>
              Social Link
            </h4>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="images/facebook-logo.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter-logo.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin-sign.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form">
            <h4>
              Newsletter
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>