<?php
// Function to load the appropriate page content based on the 'page' parameter
function loadPageContent($page) {
	$page = isset($_GET['page']) ? $_GET['page'] : '';
    switch ($page) {
        case 'work':
            include 'work.php';
            break;
        case 'school':
            include 'school.php';
            break;
        case 'hobbies':
            include 'hobbies.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case 'results':
            include 'results.php';
            break;
        default:
            // Load the default page (home) if no valid 'page' parameter is provided
            include 'index.php';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Iain's personal website showcasing my work, hobbies, and contact information.">
    <meta name="keywords" content="Iain, Personal, Portfolio, Work, Hobbies, Contact">
    <meta name="author" content="Iain">
    <title>Welcome to Iain's Website</title>

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="assets/css/colors/blue.css" rel="stylesheet"/>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"/>

    <!-- Web Fonts (optional) -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
    
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="site-header clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 title-area">
                    <div class="site-title" id="title">
                        <a href="index.php" title="">
                            <h4>Iain's Website</span></h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div id="nav" class="right">
                        <?php include("navigation.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Dynamic Page Content -->
    <?php loadPageContent($page); ?>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Add your footer widgets here -->
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-12 columns footer-left">
                    <p>Copyright © 2024 - All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript Libraries -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>