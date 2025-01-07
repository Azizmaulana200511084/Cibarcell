<?php
include("db/dbconn.php");

$t_id = $_GET['tid'];
$query = mysqli_query($conn, "SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die(mysqli_error());
$fetch = mysqli_fetch_array($query);

$amnt = $fetch['amount'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dana Payment Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        .success-message {
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
            padding: 15px;
            margin: 10% auto;
            max-width: 600px;
        }

        h2 {
            color: #3c763d;
        }
    </style>
</head>

<body>
    <div class="success-message">
        <h2>Payment Successful</h2>
        <p>Thank you for your purchase! Your payment of Rp <?php echo $amnt; ?> through Dana was successful.</p>
    </div>
</body>

</html>
