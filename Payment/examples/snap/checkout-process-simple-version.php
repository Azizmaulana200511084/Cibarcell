<?php
// This is just for very basic implementation reference, in production, you should validate the incoming requests and implement your backend more securely.
// Please refer to this docs for snap popup:
// https://docs.midtrans.com/en/snap/integration-guide?id=integration-steps-overview

namespace Midtrans;

require_once dirname(__FILE__) . '/../../Midtrans.php';
// Set Your server key
// can find in Merchant Portal -> Settings -> Access keys
Config::$serverKey = 'SB-Mid-server-KOVLzhVjwPpmxj5CsqArCi2-';
Config::$clientKey = 'SB-Mid-client-CjzAJXZ45CfNg9Kz';

// non-relevant function only used for demo/example purpose
printExampleWarningMessage();

// Uncomment for production environment
// Config::$isProduction = true;
Config::$isSanitized = Config::$is3ds = true;

// Required

include "../../../koneksi.php";
$order_id = $_GET['order_id'];

  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM pembayaran WHERE order_id='".$order_id."'";
  $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql);

  $id = $data['customerid'];
    $email = $data['email'];
    $amnt =$data['amount'];
	
$transaction_details = array(
    'order_id' => $order_id,
    'gross_amount' =>  $amnt, // no decimal allowed for creditcard
);
// Optional
$item_details = array (
    array(
        'id' => $id,
        'price' => $amnt,
        'quantity' => 1,
        'name' => "Cibarcell"
    ),
  );
// Optional
$customer_details = array(
    'first_name'    => "$id",
    'last_name'     => "",
    'email'         => "$email",
    'phone'         => "",
    'billing_address'  => "",
    'shipping_address' => ""
);
// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snap_token = '';
try {
    $snap_token = Snap::getSnapToken($transaction);
}
catch (\Exception $e) {
    echo $e->getMessage();
}


function printExampleWarningMessage() {
    if (strpos(Config::$serverKey, 'your ') != false ) {
        echo "<code>";
        echo "<h4>Please set your server key from sandbox</h4>";
        echo "In file: " . __FILE__;
        echo "<br>";
        echo "<br>";
        echo htmlspecialchars('Config::$serverKey = \'<server key>\';');
        die();
    } 
}

?>







<?php
	include("../../../function/session.php");
	include("../../../db/dbconn.php");
?>

<!DOCTYPE html>
<html>
      <head>
      <title>CibarCell</title>
	<link rel="icon" href="../../../img/logo.png" />
	<link rel = "stylesheet" type = "text/css" href="../../../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
	<script src="../../../js/bootstrap.js"></script>
	<script src="../../../js/jquery-1.7.2.min.js"></script>
	<script src="../../../js/carousel.js"></script>
	<script src="../../../js/button.js"></script>
	<script src="../../../js/dropdown.js"></script>
	<script src="../../../js/tab.js"></script>
	<script src="../../../js/tooltip.js"></script>
	<script src="../../../js/popover.js"></script>
	<script src="../../../js/collapse.js"></script>
	<script src="../../../js/modal.js"></script>
	<script src="../../../js/scrollspy.js"></script>
	<script src="../../../js/alert.js"></script>
	<script src="../../../js/transition.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
	


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAYMENT </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>


    <body>
	<svg xmlns="http://www.w3.org/20/svg" viewBox="0 0 1440 320" style="position:fixed; z-index:-1000;">
            <path fill="#333" fill-opacity="1" d="M0,192L12,186.7C24,181,48,171,72,144C96,117,120,75,144,96C168,117,192,203,216,240C240,277,264,267,288,229.3C312,192,336,128,360,112C384,96,408,128,432,138.7C456,149,480,139,504,117.3C528,96,552,64,576,90.7C600,117,624,203,648,245.3C672,288,696,288,720,293.3C744,299,768,309,792,272C816,235,840,149,864,144C888,139,912,213,936,234.7C960,256,984,224,1008,186.7C1032,149,1056,107,1080,80C1104,53,1128,43,1152,37.3C1176,32,1200,32,1224,48C1248,64,1272,96,1296,96C1320,96,1344,64,1368,69.3C1392,75,1416,117,1428,138.7L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
        </svg>
    <div id="header" style="position: fixed; background-color: #333; color: white; top: 0; z-index: 1000;">
		<img src="../../../img/logo.png">
		<label>CibarCell</label>
			
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($koneksi, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
	
			<ul>
				<li><a href="../../../function/logout.php"><i class="icon-off icon-white"></i>Keluar</a></li>
				<li>Selamat Datang:&nbsp;&nbsp;&nbsp;<a href="#profile"  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>

				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin-right: 15%;"><a href="../../../aboutus1.php">Tentang</a></li>
				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin: 0;"><a href="../../../smartphone1.php">Produk</a>
				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin: 0;"><a href="../../../home.php">Beranda</a></li>
			</ul>
	</div>

    <div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Akun Saya</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];
			
								$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = mysqli_fetch_array ($query);

								$email = $fetch['email'];
								$address = $fetch['address'];
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Nama:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php ?>&nbsp;<?php 
									echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Alamat:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Provinsi:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">Kode Pos:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Ponsel:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="../../../account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Akun"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
				</div>
					</form>
			</div>


        <br>
        <br>
            <div class="container" style="padding-top: 10%;">
<div class="card" style="background-color:#333; color: aliceblue; border-color:aliceblue;">
  <div class="card-body">
	<center>
	<p>Selesaikan Pembayaran Sekarang</p>
        <button id="pay-button" class="btn btn-primary">PILIH METODE PEMBAYARAN</button>
	</center>
    
        <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo Config::$clientKey;?>"></script>
        <script type="text/javascript">
            document.getElementById('pay-button').onclick = function(){
                // SnapToken acquired from previous step
                snap.pay('<?php echo $snap_token?>');
            };
        </script>
      
          </div>
          </div>
          </div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>




    <br>
<br>
<div id="footer" style="text-align: center; background-color: #333; color: white; bottom: 0; width: 100%; position: fixed; height: 5%">
		<!-- <div class="foot" style="text-align: center;"> -->
			<!-- <label style="font-size:17px;"> Copyright &copy; </label> -->
			<p style="font-size:15px; text-align: center;">2023-2024@Cibar Cell</p>
		<!-- </div> -->
			
			<!-- <div id="foot">
				<h4>Links</h4>
					<ul>
						<a href="http://www.facebook.com/alphaware"><li>Facebook</li></a>
						<a href="http://www.twitter.com/alphaware"><li>Twitter</li></a>
						<a href="http://www.pinterest.com/alphaware"><li>Pinterest</li></a>
						<a href="http://www.tumblr.com/alphaware"><li>Tumblr</li></a>
					</ul>
			</div> -->
	</div>
  </body>
</html>
</html>
