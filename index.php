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
            text-align: center;
            margin-top: 50px;
        }

        .featured-clients {
            background: #fff;
            padding: 20px;
        }

        .featured-clients img {
            max-width: 100px;
            margin: 10px;
        }

        .navbar-brand,
        .navbar-brand:hover {
            color: rgb(255, 255, 255);
            font-size: 30px;
            font-weight: 600;
            text-transform: uppercase;
        }

        @media (max-width: 768px) {
            .navbar-brand,
            .navbar-brand:hover {
                font-size: 18px;
            }
        }

        .custom_nav-container.navbar-expand-lg .navbar-nav .nav-link {
            padding: 10px 30px;
            color: rgb(255, 255, 255);
            font-weight: bold;
            text-align: center;
        }

        .slider_section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }

        .slider_section .carousel-inner {
            width: 100%;
            max-width: 800px; /* Optional: Limit the width of the slider */
        }

        .slider_section .carousel-item {
            display: none; /* Hide all items by default */
            justify-content: center;
            align-items: center;
        }

        .slider_section .carousel-item.active {
            display: flex; /* Show only the active item */
        }

        .slider_section .detail-box {
            text-align: center;
            margin: 0 auto; /* Center horizontally */
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
                            <div class="detail-box">
                                <h1>Our Commitment</h1>
                                <p>We write stories that reflect the power of your brand.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="detail-box">
                                <h1>Work Ethic</h1>
                                <p>We are result-oriented and dedicated to delivering excellence.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="detail-box">
                                <h1>Fluid Communication</h1>
                                <p>We adapt to your unique communication needs with flexibility and precision.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- custom menu -->
    <?php include "menu.php"; ?>
    <!-- custom menu -->

    <!-- Hero Section -->
    <div class="hero"></div>

    <!-- Featured Clients Section -->
    <div class="featured-clients">
        <!-- Display logos of past & current partners -->
        <img src="images/limkokwing.jpg" alt="Client 1">
    </div>

    <!-- footer section -->
    <?php include "footer.php"; ?>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/circles.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $('#carouselExampleControls').carousel({
                interval: 3000, // Slide every 3 seconds
                ride: 'carousel'
            });
        });
    </script>
</body>

</html>