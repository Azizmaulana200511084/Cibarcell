<?php
// Load file koneksi.php
include "koneksi.php";
// 

$id = $_POST['customerid'];
$pkirim = $_POST['pkirim'];
$address = $_POST['address'];
$email = $_POST['email'];
$amnt = $_POST['amount'];
$order_id= rand();
$transaction_status= 1;
$transaction_id= $_POST['transaction_id'];
// menginput data ke database
mysqli_query($koneksi,"insert into pembayaran  values('','$id','$pkirim','$address','$amnt','$order_id','$transaction_status','$transaction_id','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:./Payment/examples/snap/checkout-process-simple-version.php?order_id=$order_id");


?>