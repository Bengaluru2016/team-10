<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>YOM - Multipurpose HTML Theme</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
	<link rel="stylesheet" href="files/rs-plugin/css/settings.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="index-2.html">YOM</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="index-2.html">Home</a></li>
									<li><a href="#" class="has-submenu">Pages</a>
										<ul class="sub-menu">
											<li><a href="services.html">Services</a></li>
											<li><a href="clients.html">Clients</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Blog</a>
										<ul class="sub-menu">
											<li><a href="blog.html">Blog Classic</a></li>
											<li><a href="blog-grid.html">Blog Grid</a></li>
											<li><a href="blog-single.html">Single Post</a></li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li><a href="#" class="has-submenu">Work</a>
										<ul class="sub-menu">
											<li><a href="work-3columns.html">Three Columns</a></li>
											<li><a href="work-4columns.html">Four Columns</a></li>
											<li><a href="single-project.html">Single Project</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<!-- <h1>Contact Us</h1>
							<span>Lovely layout of heading</span> -->
							<h2>Mentor Registration Form</h2> <br><br>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			Name <br>
			<input type="text" name="name"> <br><br>
			Password <br>
			<input type="password" name="pwd"> <br><br>
			Email<br>
			<input type="email" name="email"> <br><br>
			Contact Number <br>
			<input type="text" name="contact"> <br><br>
			Expertise <br>
			<!-- <input type="text" name="expertise"> --> 
			<input type="radio" name="exp" value="Agriculture">Agriculture
			<input type="radio" name="exp" value="Education" >Education
			<input type="radio" name="exp" value="Healthcare">Healthcare
			<input type="radio" name="exp" value="Energy">Energy
			<br><br>
			<input type="submit" name="register">
		</form>
		
						</div>
					</div>
				</section>

				<section class="contact-map-wrapper">
					<div class="container">
						<div class="section-heading">
							<h2>Find Us On Map</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="contact-map" style="height: 380px;"></div>
							</div>
						</div>
					</div>
				</section>


				<section class="contact-us">
					<div class="container">
						<div class="section-heading">
							<h2>Send Us A Message</h2>
							<div class="section-dec"></div>
						</div>
						<div class="send-message col-sm-12">
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
								<div class=" col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="s" placeholder="Your name..." value="">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="s" placeholder="Your email..." value="">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input type="text" class="subject" name="s" placeholder="Subject..." value="">
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea id="message" class="input" name="message" placeholder="Message..."></textarea>
								</div>
								<div class="submit-coment col-md-12">
									<div class="btn-black">
										<a href="#">Send now</a>
									</div>
								</div>
							</form>		
						</div>
					</div>
				</section>

				<footer class="footer">
      <div class="three spacing"></div>
	  <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
            <a href="index.html">
             YOM
            </a>
          </h1>
          <p>©2015 Yom. All rights reserved.</p>
          <div class="spacing"></div>
          <ul class="socials">
            <li>
              <a href="http://facebook.com">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://dribbble.com">
                <i class="fa fa-dribbble"></i>
              </a>
            </li>
            <li>
              <a href="http://tumblr.com">
                <i class="fa fa-tumblr"></i>
              </a>
            </li>
          </ul>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Some pages</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">View some works here</a></li>
              <li><a href="#">Follow our blog</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Our services</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Recent posts</h4>
            <ul>
              <li><a href="#">Hello World!</a></li>
              <li><a href="#">This is the post title here</a></li>
              <li><a href="#">Our happy day</a></li>
              <li><a href="#">The first works done</a></li>
              <li><a href="#">The cats and dogs</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <h4>Email updats</h4>
          <p>We want to share our latest trends, news and insights with you.</p>
          <form>
            <input class="email-address" placeholder="Your email address" type="text">
            <input class="button boxed small" type="submit">
          </form>
          <div class="spacing"></div>
        </div>
      </div>
	  </div>
      <div class="two spacing"></div>
    </footer>
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li class="menu-item-has-children"><a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="services.html">Services</a></li>
									<li><a href="clients.html">Clients</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog.html">Blog Classic</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-single.html">Single Post</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li class="menu-item-has-children"><a href="#">Works</a>
								<ul class="sub-menu">
									<li><a href="work-3columns.html">Three Columns</a></li>
									<li><a href="work-4columns.html">Four Columns</a></li>
									<li><a href="single-project.html">Single Project</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>


	

	<script type="text/javascript" src="files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="files/js/plugins.js"></script>
	<script type="text/javascript" src="files/js/custom.js"></script>

	<!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="files/js/jquery.gmap3.min.js"></script>

	<!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function($){
            $('.contact-map').gmap3({
                marker:{
                    address: '48.777300, 9.179664' 
                },
                    map:{
                    options:{
                    zoom: 15,
                    scrollwheel: false,
                    streetViewControl : true
                    }
                }
            });
        });
    </script>

</body>

<!-- Mirrored from torchtemplates.net/html/YOM/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jun 2015 08:35:04 GMT -->
</html>

<?php

	$host = 'localhost:3306';
	$user = 'root';
	$pwd = '';
	$db = 'villgro';

	$conn = mysql_connect($host,$user,$pwd);
	if(!$conn)
		die("Failed to connect".mysql_error());

	if(!mysql_select_db($db,$conn))
		die(mysql_error());

	if(isset($_POST['register']))
	{
		$name =  $_POST['name'];
		$pwd = $_POST['pwd'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$expertise = $_POST['exp'];

		$insert = "INSERT INTO registration VALUES('$name','$pwd','$email','$contact','$expertise')";

		$run_query = mysql_query($insert,$conn);

		if(!$run_query)
			echo "Failed to insert values\n";
	}

	// else if(isset($_POST['search']))
	// {
	// 	$reg_num = $_POST['search_reg'];
	// 	$search_query = "SELECT * FROM car WHERE reg_num='$reg_num'";
	// 	$run_query = mysql_query($search_query,$conn);
	// 	$res = mysql_fetch_assoc($run_query);
	// 	$num_rows = mysql_num_rows($run_query);
	// 	if($num_rows)
	// 	{
	// 		echo "\nRegistration Number : ".$res['reg_num'];
	// 		echo "\nModel : ".$res['model'];
	// 		echo "\nColor : ".$res['color'];
	// 		echo "\nYear of Manufacture: ".$res['year'];
	// 		echo "\nMileage : ".$res['mileage'];
	// 	}
	// 	else
	// 	{
	// 		echo "No records found !\n";
	// 	}
	// }
?>
