<?php include ('include/header_top.html'); ?>

<title>Inspirational Photos</title>
<?php
include ('include/header_bottom.html');
include ('include/nav.html');
?>
		<div class="row inspire-intro">
			<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
				<h1>Inspirational Photos</h1>
			</div>
		</div>
		<div class="row how-inspire">
			<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
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
			</div>
		</div>
	</div>
<?php
include('include/socialcons.html');
include('include/footer.php');
?>