<?php

include('db/dbconn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $t_id = $_POST['transaction_id'];
    $amnt = $_POST['amount'];

    $query = "INSERT INTO transaction (transaction_id, amount) VALUES ('$t_id', '$amnt')";
    mysqli_query($conn, $query);

    $cid = $_SESSION['id'];
    $total = $amnt;

    include("random_code.php");
    $t_id = $r_id;
    $date = date("M d, Y");
    $que = mysqli_query($conn, "INSERT INTO `transaction` (transaction_id, customerid, amount, order_stat, order_date) VALUES ('$t_id', '$cid', '$total', 'ON HOLD', '$date')") or die(mysqli_error());

    $p_id = $_POST['pid'];
    $oqty = $_POST['qty'];

    $i = 0;
    foreach ($p_id as &$pro_id) {
        mysqli_query($conn, "INSERT INTO `transaction_detail` (`product_id`, `order_qty`, `transaction_id`) VALUES ('" . ($pro_id) . "', '" . ($oqty[$i]) . "', '" . ($t_id) . "')") or die(mysqli_error());
        $i++;
    }

    header("Location: success_dana.php");
    exit();
} else {
    http_response_code(405);
    echo "Metode Permintaan Tidak Valid";
}
?>
