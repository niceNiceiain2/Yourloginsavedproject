<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Iain's Website</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/colors/blue.css">
</head>
<body>
    <div class="topbar clearfix">
        <div class="container">
            <div class="col-lg-12 text-right">
                <div class="social_buttons">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
                </div>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="container">
            <div class="site-header clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 title-area">
                    <div class="site-title" id="title">
                        <a href="index.php" title="">
                            <h4>MAXI<span>BIZ</span></h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div id="nav" class="right">
                        <div class="container clearfix">
                            <ul id="jetmenu" class="jetmenu blue">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="hobbies.html">Hobbies</a></li>
                                <li><a href="work.html">Work</a></li>
                                <li><a href="school.html">School</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="intro">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" id="greeting"></h3>
                </div>
                <div class="panel-body">
                    <p>Hello! My name is Iain. I am a current student at UTSA studying Computer Science.<br>
                    and this is my senior year. I hope to gain a lot of knowledge in CSS, HTML, JavaScript, JQuery, SQL, and more backend development as this class continues. I love to explore and learn a lot from new experiences and technologies here at UTSA. I am excited about the opportunities that lie ahead and look forward to contributing my skills and knowledge in this field.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Function to display greeting based on current time
        function displayGreeting() {
            const greetingElement = document.getElementById('greeting');
            const currentHour = new Date().getHours();
            let greetingMessage = '';

            if (currentHour < 12) {
                greetingMessage = 'Good Morning!';
            } else if (currentHour < 18) {
                greetingMessage = 'Good Afternoon!';
            } else {
                greetingMessage = 'Good Evening!';
            }

            greetingElement.textContent = greetingMessage;
        }

        // Call the function when the page loads
        window.onload = displayGreeting;
    </script>
    <?php
	//Content body of my index.php
	if(isset($_GET['page']))
	{
	$page=$_GET['page'];
	switch($page) {
		case "work":
			include("work.php");
			break;
		case "school":
			include("school.php");
			break;
		case "hobbies":
			include("hobbies.php");
			break;
		case "contact":
			include("contact.php");
			break;
		default: //will load this incase page is nothing or anything else
			include("home.php");
			break;
	}
	}
	else
		include("home.php");
	
	?>
    <!-- Include other sections of your website here -->
    
    <footer class="footer">
        <div class="container">
            <div class="widget col-lg-3 col-md-3 col-sm-12">
                <h4 class="title">About us</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
                <a class="button small" href="#">read more</a>
            </div>
            <div class="widget col-lg-3 col-md-3 col-sm-12">
                <h4 class="title">Recent Posts</h4>
                <ul class="recent_posts">
                    <li>
                        <a href="home1.html#">
                            <img src="img/recent_post_01.png" alt="" />Our New Dashboard Is Here</a>
                        <a class="readmore" href="#">read more</a>
                    </li>
                    <li>
                        <a href="home1.html#">
                            <img src="img/recent_post_02.png" alt="" />Design Is In The Air</a>
                        <a class="readmore" href="#">read more</a>
                    </li>
                </ul>
            </div>
            <div class="widget col-lg-3 col-md-3 col-sm-12">
                <h4 class="title">Get In Touch</h4>
                <ul class="contact_details">
                    <li><i class="fa fa-envelope-o"></i> info@yoursite.com</li>
                    <li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
                    <li><i class="fa fa-home"></i> Some Fine Address, 887, Madrid, Spain.</li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> View large map</a></li>
                </ul>
            </div>
            <div class="widget col-lg-3 col-md-3 col-sm-12">
                <h4 class="title">Flickr Stream</h4>
                <ul class="flickr">
                    <li><a href="#"><img alt="" src="img/flickr_01.jpg"></a></li>
                    <li><a href="#"><img alt="" src="img/flickr_02.jpg"></a></li>
                    <li><a href="#"><img alt="" src="img/flickr_03.jpg"></a></li>
                    <li><a href="#"><img alt="" src="img/flickr_04.jpg"></a></li>
                    <li><a href="#"><img alt="" src="img/flickr_05.jpg"></a></li>
                    <li><a href="#"><img alt="" src="img/flickr_06.jpg"></a></li>
                    <li><a href="#"><img alt="" src="img/flickr_07.jpg"></a></li>
                    <li><a href="#"><img alt="" src="img/flickr_08.jpg"></a></li>
                </ul>
            </div>
        </div>

        <div class="copyrights">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-12 columns footer-left">
                    <p>Copyright © 2014 - All rights reserved.</p>
                    <div class="credits">
                        Created with MaxiBiz template by <a href="https://templatemag.com/">TemplateMag</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>