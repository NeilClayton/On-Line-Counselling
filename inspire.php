<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Inspirational Photos</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="JS/bootstrap.min.js"></script>
	<!-- Custom JS -->
	<script src="JS/wordcount.js"></script>
	<!-- Custom CSS -->
	<link href="CSS/styles.css" rel="stylesheet">
	<link href="CSS/social-styles.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<!-- Custom JS -->
	<script src="https://use.fontawesome.com/71ebc9e44c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	<?php
	include('include/nav.html');
	include('include/socialcons.html');
	?>
				<section class="row inspire-intro">
					<section class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						<h1>Inspirational Photos</h1>
					</section>
				</section>
				<section class="row how-inspire">
					<section class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="Images/inspire1.jpg" alt="Inspire1" width="1280" height="720">
									<div class="carousel-caption">
										<h3>Caption 1</h3>
									</div>
								</div>
							<div class="item">
								<img src="Images/inspire2.jpg" alt="Inspire2" width="1280" height="720">
									<div class="carousel-caption">
										<h3>Caption 2</h3>
									</div>
							</div>
							<div class="item">
								<img src="Images/inspire3.jpg" alt="Inspire3" width="1280" height="720">
									<div class="carousel-caption">
										<h3>Caption 3</h3>
									</div>
								</div>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						</div>
					</section>
				</section>
			</section>
	<?php
	include('include/footer.html');
	?>
	</body>
</html>