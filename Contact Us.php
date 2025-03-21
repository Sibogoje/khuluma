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
          <form action="send_email.php" method="POST">
            <div>
              <input type="text" name="name" placeholder="Name" required />
            </div>
            <div>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div>
              <input type="text" name="phone" placeholder="Phone Number" required />
            </div>
            <div>
              <input type="text" name="message" class="message-box" placeholder="Message" required />
            </div>
            <div class="d-flex  mt-4 ">
              <button type="submit">
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
  <?php include "footer.php"; ?>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>