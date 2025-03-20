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

        .thought_leadership_section .article {
            margin-bottom: 30px;
        }

        .thought_leadership_section .article h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .thought_leadership_section .article p {
            font-size: 1em;
            color: #6c757d;
            text-align: justify;
        }

        .thought_leadership_section .article p:first-letter {
            font-size: 2em;
            font-weight: bold;
            float: left;
            margin-right: 8px;
            line-height: 1;
        }

        .thought_leadership_section .article blockquote {
            margin: 20px 0;
            padding: 10px 20px;
            background: #e9ecef;
            border-left: 5px solid #007bff;
            font-style: italic;
            color: #495057;
        }

        .thought_leadership_section .article blockquote p {
            margin: 0;
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
            <div class="article">
                <h3>The Power of Brand Stories</h3>
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
            <!-- Add more articles as needed -->
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
