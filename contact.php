<?php include ('include/header_top.html'); ?>

<title>Contact Me - On Line Counselling Affordable, Skype On Line Counselling Via On Line Chat, Psychologist</title>
<?php
include ('include/header_bottom.html');
include ('include/nav.html');
?>
		<div class="row contact">
			<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
				<h1>Please feel free to contact me</h1>
			</div>
		</div>
		<div class="row contactform">
			<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
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
			</div>
		</div>
	</div>
<?php
include('include/socialcons.html');
include('include/footer.php');
?>