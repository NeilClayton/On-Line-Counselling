<?php
include('include/function.php');
include('include/connection.php');
echo connection_open();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Payment successful</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="JS/bootstrap.min.js"></script>
	<!-- Custom JS -->
	<script src="JS/controls.js"></script>
	<script src="https://use.fontawesome.com/71ebc9e44c.js"></script>
	<!-- Custom CSS -->
	<link href="CSS/styles.css" rel="stylesheet">
	<link href="CSS/social-styles.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
    <body>
        <?php
        if (!empty($_REQUEST)) {
            $product_no = $_REQUEST['item_number']; 
            $product_transaction = $_REQUEST['tx']; 
            $product_price = $_REQUEST['amt']; 
            $product_currency = $_REQUEST['cc']; 
            $product_status = $_REQUEST['st']; 
                
            $product_no = base64_decode($product_no);
            $data = array(
                'product_id' => $product_no
            );
            $query = Select_Record_By_One_Filter($data, 'tbl_product_detail');
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $result = $query->fetch();
            echo connection_close();
        }
        ?>
		<section class="container-fluid">
			<section class="row success">
				<section class="col-md-8 col-md-offset-2">
					<h1>Successful Transaction</h1>
					<h2>Payment Status</h2>
					<section class="receipt">
                <?php
                #Rechecking the product price and currency details
                if ($product_price == $result['product_price'] && $product_currency == $result['product_currency']) {
                    echo "<h3>Payment Successful</h3>";
                    echo "<P>Transaction Status - " . $product_status . "</P>";
                    echo "<P>Transaction Id - " . $product_transaction . "</P>";
                    echo "<div><a href='fees.php'>Back to Fees page</a></div>";
                } else {
                    echo "<h3>Payment Failed</h3>";
                    echo "<P>Transaction Status - Unompleted</P>";
                    echo "<P>Transaction Id - " . $product_transaction . "</P>";
                    echo "<div><a href='fees.php'>Back to Fees page</a></div>";
                }
                ?>
					</section>
				</section>
			</section>
        </section>
    </body>
</html>

