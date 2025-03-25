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

    <title>Our Story Matters</title>

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

        /* Thought Leadership Section */
        .thought_leadership_section {
            padding: 100px 0;
            background: #f8f9fa;
        }

        .thought_leadership_section .row {
            display: flex;
            flex-wrap: wrap;
        }

        .thought_leadership_section .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 15px;
        }

        .thought_leadership_section .img-box img {
            width: 100%;
            border-radius: 10px;
        }

        .accordion .card {
            margin-bottom: 10px;
        }

        .accordion .card-header {
            padding: 0;
            border: none;
            background: none;
        }

        .accordion .card-header button {
            width: 100%;
            text-align: left;
            padding: 15px;
            font-size: 1.2em;
            font-weight: bold;
            color: #343a40;
            background: #e9ecef;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .accordion .card-header button:focus {
            outline: none;
        }

        .accordion .card-body {
            padding: 15px;
            background: #fff;
            border: 1px solid #e9ecef;
            border-top: none;
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

    <!-- Thought Leadership Section -->
    <section class="thought_leadership_section">
        <div class="container">
            <div class="section-title">
                <h2 style="border-bottom: none;">Thought Leadership</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/articles/2.jpeg" alt="Poster 1" />
                    </div>
                    <div class="img-box">
                        <img src="images/articles/1.jpg" alt="Poster 2" />
                    </div>
                    <!-- Add more posters as needed -->
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    The Power of Brand Stories
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Storytelling is the interactive art of using words and actions to reveal the elements and images of a story while encouraging the listener’s imagination.
                                    </p>
                                    <blockquote>
                                        <p>
                                            "Stories help people find purpose and meaning. They shape perceptions, cultivate empathy and understanding, and facilitate growth. Stories help us appreciate the complexities of the human condition and recognise our shared humanity."
                                        </p>
                                    </blockquote>
                                    <p>
                                        Stories connect each one of us with specific brands. The power of storytelling is not in its length or its intricate plot. It is in its ability to open our minds and make us compassionate as we see the world through a broader lens.
                                    </p>
                                    <p>
                                        Khuluma Eswatini believes that every brand has a story to tell. However, once your brand story is told, your target audience may only know it and be inspired to act.
                                    </p>
                                    <p>
                                        As you focus on your core business, we’ll help you tell your story because our mission is to write stories that reflect the power of your brand.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Khuluma Eswatini partners with 360 Talks
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Khuluma Eswatini has partnered with 360 Talks to provide communication support in hosting an upcoming empowerment session on April 12th, 2025.
                                    </p>
                                    <p>
                                        360 Talks is an entrepreneurial engagement forum that Sindi Simelane, a recipient of the Entrepreneur of the Year Award (EYA) for the Hhohho Region, founded in 2024. Simelane is the director of Café 360 and Mugg & Bean, a franchise that recently expanded to Mbabane.
                                    </p>
                                    <p>
                                        A unique feature of these sessions is that, beyond the presentations by different speakers, they allow participants to use their hands and minds in various practical application exercises. These exercises create meaningful conversations, enforce learning, and enable participants to translate their aspirations into actionable goals that they can monitor throughout the year.
                                    </p>
                                    <p>
                                        Speaking on the entrepreneurial sessions, Simelane said, "I aspire to be a catalyst for growth, inspiring fellow EmaSwati to take ownership of their lives and contribute to our economy."
                                    </p>
                                    <p>
                                        Simelane views entrepreneurship as a powerful driver of economic transformation and actively seeks collaborations with government organisations focused on export growth and economic development. Simelane's message to aspiring entrepreneurs is clear: "Learn, serve, and build relationships.”
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Add more articles as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Thought Leadership Section -->

    <!-- footer section -->
    <?php include "footer.php"; ?>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/circles.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
