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

  <title>Our Services</title>

  <style>
    .service-box {
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      color: #fff;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .service-box:hover {
      transform: translateY(-10px);
    }

    .service-box h3 {
      margin-bottom: 15px;
    }

    .service-box ul {
      list-style: none;
      padding: 0;
    }

    .service-box ul li {
      margin-bottom: 10px;
    }

    .service-box .icon {
      font-size: 40px;
      margin-bottom: 10px;
    }

    .bg-red {
      background-color:rgb(178, 31, 26);
    }

    .bg-grey {
      background-color:rgb(50, 51, 52);
    }

    .bg-black {
      background-color:rgb(0, 0, 0);
    }
  </style>

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

  <!-- services section -->
  <section class="services_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>Our Services</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="service-box bg-red">
            <div class="icon">📱</div>
            <h3>Marketing Communication</h3>
            <ul>
              <li>Social Media Management</li>
              <li>Content Creation (Blogs, Graphics, Videos)</li>
              <li>Campaign Development</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="service-box bg-grey">
            <div class="icon">📰</div>
            <h3>Brand and Media Relations</h3>
            <ul>
              <li>Brand Identity and Logo Development</li>
              <li>Reputation and Crisis Management</li>
              <li>Press Releases</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="service-box bg-black">
            <div class="icon">📚</div>
            <h3>Editorial Services and Publications</h3>
            <ul>
              <li>Annual Reports and Internal Communications</li>
              <li>Commemorative Publications and Reports</li>
              <li>Editing of academic research</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="service-box bg-red">
            <div class="icon">🎓</div>
            <h3>Training Services</h3>
            <ul>
              <li>Public Relations and Media Relations Training</li>
              <li>Interview Preparation and Career Coaching</li>
              <li>Theological Studies and Communication</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end services section -->

  <!-- info section -->
<?php include "footer.php"; ?>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>