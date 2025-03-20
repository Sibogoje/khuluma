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
        }

        /* Case Studies Section */
        .case_studies_section {
            padding: 100px 0;
            background: #fff;
        }

        .case_studies_section .case-study {
            margin-bottom: 30px;
        }

        .case_studies_section .case-study h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .case_studies_section .case-study p {
            font-size: 1em;
            color: #6c757d;
        }

        /* Industry Insights Section */
        .industry_insights_section {
            padding: 100px 0;
            background: #f8f9fa;
        }

        .industry_insights_section .insight {
            margin-bottom: 30px;
        }

        .industry_insights_section .insight h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .industry_insights_section .insight p {
            font-size: 1em;
            color: #6c757d;
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
                <h2>Thought Leadership</h2>
            </div>
            <div class="article">
                <h3>Article Title 1</h3>
                <p>
                    This is a brief description of the thought leadership article. It provides insights and valuable information on a specific topic related to communications and public relations.
                </p>
            </div>
            <div class="article">
                <h3>Article Title 2</h3>
                <p>
                    This is a brief description of the thought leadership article. It provides insights and valuable information on a specific topic related to communications and public relations.
                </p>
            </div>
            <!-- Add more articles as needed -->
        </div>
    </section>
    <!-- end Thought Leadership Section -->

    <!-- Case Studies Section -->
    <section class="case_studies_section">
        <div class="container">
            <div class="section-title">
                <h2>Case Studies & Success Stories</h2>
            </div>
            <div class="case-study">
                <h3>Case Study Title 1</h3>
                <p>
                    This is a brief description of the case study. It showcases a previous project with client testimonials and highlights the success achieved.
                </p>
            </div>
            <div class="case-study">
                <h3>Case Study Title 2</h3>
                <p>
                    This is a brief description of the case study. It showcases a previous project with client testimonials and highlights the success achieved.
                </p>
            </div>
            <!-- Add more case studies as needed -->
        </div>
    </section>
    <!-- end Case Studies Section -->

    <!-- Industry Insights Section -->
    <section class="industry_insights_section">
        <div class="container">
            <div class="section-title">
                <h2>Industry Insights</h2>
            </div>
            <div class="insight">
                <h3>Insight Title 1</h3>
                <p>
                    This is a brief description of the industry insight. It provides valuable information and trends in the field of communications and public relations.
                </p>
            </div>
            <div class="insight">
                <h3>Insight Title 2</h3>
                <p>
                    This is a brief description of the industry insight. It provides valuable information and trends in the field of communications and public relations.
                </p>
            </div>
            <!-- Add more insights as needed -->
        </div>
    </section>
    <!-- end Industry Insights Section -->

    <!-- footer section -->
    <?php include "footer.php"; ?>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/circles.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
