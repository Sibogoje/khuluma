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
  <style>
    .alert {
      display: none;
      padding: 15px;
      margin-top: 20px;
      border: 1px solid transparent;
      border-radius: 4px;
    }

    .alert-success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
    }

    .alert-danger {
      color: #721c24;
      background-color: #f8d7da;
      border-color: #f5c6cb;
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

  <!-- contact section -->
  <section class="contact_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
          <h2 class="custom_heading">Contact Us</h2>
          <div id="alert" class="alert"></div>
          <form id="contactForm" action="send_email.php" method="POST">
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
            <div class="d-flex mt-4">
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
  <script>
    $(document).ready(function() {
      $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
          type: 'POST',
          url: 'send_email.php',
          data: $(this).serialize(),
          success: function(response) {
            var alertBox = $('#alert');
            if (response.trim() == 'Message sent successfully!') {
              alertBox.removeClass('alert-danger').addClass('alert-success').text(response).fadeIn();
              $('#contactForm')[0].reset();
            } else {
              alertBox.removeClass('alert-success').addClass('alert-danger').text(response).fadeIn();
            }
            setTimeout(function() {
              alertBox.fadeOut();
            }, 5000);
          }
        });
      });
    });
  </script>

</body>

</html>