<?php
include('include/function.php');
include('include/connection.php');
echo connection_open();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Fees, Costs & Booking a Session</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="JS/bootstrap.min.js"></script>
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
	?>
			</div><!-- /.container-fluid -->
			</nav>
			
				<?php include('include/socialcons.html');?>
				<div class="row fees">
					<div class="col-sm-12 col-md-10 col-md-offset-1">
						<h1>Fees & Booking a Session</h1>
						<p class="fees-intro">The prices for counselling are listed below:</p>
						<div class="jumbotron">
							<h2>How to Pay</h2>
							<p>Payments will be requested by the official PayPal website only. This offers you complete payment security and online protection. <br><strong>You do not need to have a PayPal account, you can simply pay with your credit or debit card through PayPal.</strong></p>
							<p>Once payment is received, you will be sent a receipt and an email from me to confirm your session. All sessions should be paid for at least 3 days prior to the session date unless discussed in advance with me.</p>
							<p class="text-danger">Please note: Requests to reschedule must be emailed to me at least 24 hours prior to the scheduled appointment, otherwise the session will be charged. Missed sessions without prior contact will need to be charged.</p>
							<img src="Images/paypal-cards.png" class="img-responsive img-thumbnail" alt="cards accepted" width="500" height="63">
						</div>
						<?php $query = Select_All_Records('tbl_product_detail');
						$query->setFetchMode(PDO::FETCH_ASSOC);
							while ($result = $query->fetch()) 
							{
									$pname = $result['product_name'];
									$pprice = $result['product_price'];
									$description = explode('#@#', $result['product_dec']);?>
									<form action = "process.php" method = "post">
										<div id = "product_content">
											<ul><?php
												foreach ($description as $value) { ?>
													<div class='jumbotron'>
													<h2><?php echo $pname?> <b class="price pull-right"><?php echo "£" . $pprice ?></b></h2>
													<p><?php echo $value?></p>
													<input type="hidden" value="<?php echo $result['item_number'];?>" name="product_id">
													<button type="submit" class="btn btn-primary" name="submit"><?php echo "Buy Now £". $result['product_price'];?>&nbsp;&nbsp;<i class="fa fa-paypal"></i></button>													
												<?php } ?>
											</ul>
												</div>
									</form>
						<?php
							}
						?>
						<div class="jumbotron">
							<h2>Intensive Counselling (email me for quotes)</h2>
							<p>Travel to your chosen holiday destination and combine a wonderful relaxing holiday whilst having intensive counselling with me. I will work with you daily and really get to know you. 
							This will give me great insight into how you function and deal with the problems around you and then I will be able to help you live a happier and healthier life. </p>
							<p>This package is ideal for people with several interlinked problems and will benefit you by combining intensive counsellor time with the added advantage of a relaxing new environment. 
							Intensive counselling is available anywhere in fact wherever you want to receive help, it can be arranged by appointment.</p> 
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
	include('include/footer.html');
	?>
	</body>
</html>
<?php
//connection_close() is used for closing the connection . 
 connection_close();
?>