<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Contact Me - On Line Counselling Affordable, Skype On Line Counselling Via On Line Chat, Psychologist</title>
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
				<section class="row contact">
					<section class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						<h1>Please feel free to contact me</h1>
					</section>
				</section>
				<section class="row contactform">
					<section class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						<form>
						<!-- Div to group these elements -->
							<div class="form-group ">
								<label for="name">Full name</label>
								<input type="text" class="form-control" id="inputHelpBlock name" placeholder="Who are you?" aria-describedby="helpBlock" autofocus>
								<span id="helpBlock" class="help-block">Leave this field blank if you wish to keep your anonymity.</span>
							</div>
						<!-- Div to group these elements -->
							<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" id="email" class="form-control" placeholder="Please enter your e-mail address" aria-describedby="helpBlock" required>
							</div>
						<!-- Div to group these elements -->
							<div class="form-group">
								<label for="subject">Subject</label>
								<input type="subject" id="subject" class="form-control" placeholder="Please enter a subject" aria-describedby="helpBlock" required>
							</div>
						<!-- Div to group these elements -->
							<div class="form-group">
								<label for="Email">Message</label>
								<textarea class="form-control" id="message" rows="7" cols="100" maxlength="1000" required placeholder="Please enter your message"></textarea>
								<p id="countleft" class="text-info"></b><br>
							</div>
							<div class="checkbox">
								<label>
								<input type="checkbox">Check here to receive email updates
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</section>
				</section>
			</section>
<?php
	include('include/footer.html');
	?>
	</body>
</html>