<?php
include('include/function.php');
include('include/connection.php');
echo connection_open();
?>
<html>
    <head>
        <title>Successful</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
        <div>
            <h1>Successful Transaction</h1>

            <div>
                <h2>Payment Status</h2>
				</br>

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
            </div>
        </div>
    </body>
</html>

