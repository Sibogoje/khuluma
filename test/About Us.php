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
    .about_section, .approach_section, .team_section, .values_section {
        padding: 60px 0;
    }
    .custom_heading-container h2 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #343a40;
    }
    .detail-box p, .approach_section p, .team-member p, .value-box p {
        font-size: 1.1em;
        color: #6c757d;
    }
    .team-member, .value-box {
        text-align: center;
        margin-bottom: 30px;
    }
    .team-member img {
        border-radius: 50%;
        margin-bottom: 15px;
    }
    .team-member h4, .value-box h4 {
        font-size: 1.5em;
        color: #343a40;
    }
    .value-box ul {
        list-style: none;
        padding: 0;
    }
    .value-box ul li {
        margin-bottom: 10px;
    }
  </style>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section starts -->
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

  <!-- about section -->
  <section class="about_section layout_padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="img-box">
            <img src="images/about-img.png" alt="About Us Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>Who We Are</h2>
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
  <section class="approach_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>Our Approach</h2>
      </div>
      <p>
        At Khuluma, we believe in the power of storytelling. Our approach is centered around understanding your brand's unique voice and crafting messages that resonate with your audience. We leverage our expertise in communications to create impactful campaigns that drive engagement and build lasting relationships.
      </p>
    </div>
  </section>
  <!-- end approach section -->

  <!-- team section -->
  <section class="team_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>Our Team</h2>
      </div>
      <div class="row">
        <!-- Example team member -->
        <div class="col-md-4">
          <div class="team-member">
            <img src="images/team-member1.jpg" alt="Team Member 1" class="img-fluid">
            <h4>John Doe</h4>
            <p>CEO & Founder</p>
            <p>John is a seasoned communications expert with over 20 years of experience in the industry.</p>
          </div>
        </div>
        <!-- Add more team members as needed -->
      </div>
    </div>
  </section>
  <!-- end team section -->

  <!-- values section -->
  <section class="values_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
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

  <!-- info section -->
  <?php include "footer.php"; ?>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>