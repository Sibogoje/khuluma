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

  <title>About Us</title>

  <?php include "imports.php"; ?>

  <style>
    /* General Styles */
    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      line-height: 1.6;
    }

    h2 {
      font-size: 2.5em;
      font-weight: 700;
      color: #343a40;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.1em;
      color: #6c757d;
    }

    .section-title {
      text-align: center;
      margin-bottom: 60px;
    }

    .section-title h2 {
      position: relative;
      display: inline-block;
      padding-bottom: 10px;
    }

    .section-title h2::after {
      content: '';
      position: absolute;
      left: 50%;
      bottom: 0;
      width: 50px;
      height: 3px;
      background: #007bff;
      transform: translateX(-50%);
    }

    /* About Section */
    .about_section {
      padding: 100px 0;
      background: #f8f9fa;
    }

    .about_section .img-box img {
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .about_section .detail-box {
      padding-left: 30px;
    }

    /* Approach Section */
    .approach_section {
      padding: 100px 0;
      background: #fff;
    }

    .approach_section p {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
    }

    /* Values Section */
    .values_section {
      padding: 100px 0;
      background: #f8f9fa;
    }

    .value-box {
      text-align: center;
      margin-bottom: 30px;
      padding: 30px;
      border-radius: 10px;
      transition: transform 0.3s ease;
      color: #fff;
    }

    .value-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .value-box h4 {
      font-size: 1.5em;
      margin-bottom: 15px;
    }

    .value-box p {
      font-size: 1em;
      color: #fff;
      opacity: 0.9;
    }

    /* Color Palette for Cards */
    .value-box:nth-child(1),
    .value-box:nth-child(5) {
      background: #dc3545; /* Red */
    }

    .value-box:nth-child(2),
    .value-box:nth-child(6) {
      background: #6c757d; /* Grey */
    }

    .value-box:nth-child(3),
    .value-box:nth-child(7) {
      background: #343a40; /* Black */
    }

    .value-box:nth-child(4),
    .value-box:nth-child(8) {
      background: #28a745; /* Green */
    }

    /* Footer */
    footer {
      background: #343a40;
      color: #fff;
      padding: 40px 0;
      text-align: center;
    }

    footer p {
      margin: 0;
    }
  </style>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section starts -->
    <?php include "header.php"; ?>
    <!-- end header section -->
  </div>

  <!-- custom menu -->
  <?php include "menu.php"; ?>
  <!-- custom menu -->

  <!-- about section -->
  <section class="about_section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="About Us Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="section-title">
              <h2 style="border-bottom: none;">Who We Are</h2>
            </div>
            <p>
              Khuluma Eswatini is a leading communications and public relations firm dedicated to shaping narratives and building trust. We connect brands with their audience through innovative strategies and creative solutions.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- approach section -->
  <section class="approach_section">
    <div class="container">
      <div class="section-title">
        <h2>Our Approach</h2>
      </div>
      <p>
        At Khuluma, we believe in the power of storytelling. Our approach is centered around understanding your brand's unique voice and crafting messages that resonate with your audience. We leverage our expertise in communications to create impactful campaigns that drive engagement and build lasting relationships.
      </p>
    </div>
  </section>
  <!-- end approach section -->

  <!-- values section -->
  <section class="values_section">
    <div class="container">
      <div class="section-title">
        <h2>Our Values</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="value-box">
            <h4>Craftsmanship</h4>
            <p>We take pride in our work and strive for excellence in everything we do.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-box">
            <h4>Curiosity</h4>
            <p>We are always eager to learn and explore new ideas to stay ahead in the industry.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-box">
            <h4>Collaboration</h4>
            <p>We believe in the power of teamwork and work closely with our clients to achieve their goals.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-box">
            <h4>Integrity</h4>
            <p>We conduct our business with honesty and transparency, building trust with our clients.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-box">
            <h4>Innovation</h4>
            <p>We embrace creativity and innovation to deliver unique and effective solutions.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-box">
            <h4>Sustainability</h4>
            <p>We are committed to sustainable practices that benefit our community and the environment.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end values section -->

  <!-- footer section -->
  <?php include "footer.php"; ?>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>