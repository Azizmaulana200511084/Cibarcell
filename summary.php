<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<html>
<head>
	<title>CibarCell</title>
	<link rel="icon" href="img/logo.png" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
        function togglePaymentRegisterForm() {
            var form = document.getElementById('paymentRegisterForm');
            form.style.display = (form.style.display === 'none') ? 'block' : 'none';
        }
    </script>
</head>
<body>
<svg xmlns="http://www.w3.org/20/svg" viewBox="0 0 1440 320" style="position:fixed; z-index:-1000;">
            <path fill="#333" fill-opacity="1" d="M0,192L12,186.7C24,181,48,171,72,144C96,117,120,75,144,96C168,117,192,203,216,240C240,277,264,267,288,229.3C312,192,336,128,360,112C384,96,408,128,432,138.7C456,149,480,139,504,117.3C528,96,552,64,576,90.7C600,117,624,203,648,245.3C672,288,696,288,720,293.3C744,299,768,309,792,272C816,235,840,149,864,144C888,139,912,213,936,234.7C960,256,984,224,1008,186.7C1032,149,1056,107,1080,80C1104,53,1128,43,1152,37.3C1176,32,1200,32,1224,48C1248,64,1272,96,1296,96C1320,96,1344,64,1368,69.3C1392,75,1416,117,1428,138.7L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
        </svg>

	<div id="header" style="position: fixed; background-color: #333; color: white; top: 0; z-index: 1000;">
		<img src="img/logo.png">
		<label>CibarCell</label>
			
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
	
			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>Keluar</a></li>
				<li>Selamat Datang:&nbsp;&nbsp;&nbsp;<a href="#profile"  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>

				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin-right: 15%;"><a href="aboutus1.php">Tentang</a></li>
				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin: 0;"><a href="smartphone1.php">Produk</a>
				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin: 0;"><a href="home.php">Beranda</a></li>
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
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Akun"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
				</div>
					</form>
			</div>
	
	
<div id="container">
	<div class="nav" style="padding-bottom: 5%;">	
			 <!-- <ul>
				<li><a href="home.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="smartphone1.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy1.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs1.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul> -->
	</div>
	
	<form method="post" class="well"  style="background-color:#333; color: aliceblue; overflow:hidden;">
	<table class="table" style="width:50%; background-color:#333; color: aliceblue;">
	<label style="font-size:25px;">Pesanan</label>
		<tr>
			<th><h5>Jumblah</h5></td>
			<th><h5>Nama Produk</h5></td>
			<th><h5>Warna</h5></td>
			<th><h5>Harga</h5></td>
		</tr>
		
		<?php
		$t_id = $_GET['tid'];
		$query = mysqli_query($conn, "SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die (mysqli_error());
		$fetch = mysqli_fetch_array($query);
		
		$amnt = $fetch['amount'];
		$t_id = $fetch['transaction_id'];
		
		$query2 = mysqli_query($conn, "SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysqli_error());
		while($row = mysqli_fetch_array($query2)){
		
		$pname = $row['product_name'];
		$psize = $row['product_color'];
		$pprice = $row['product_price'];
		$oqty = $row['order_qty'];
		
		echo "<tr>";
		echo "<td>".$oqty."</td>";
		echo "<td>".$pname."</td>";
		echo "<td>".$psize."</td>";
		echo "<td>".$pprice."</td>";
		echo "</tr>";
		}
		?>

	</table>
	<legend></legend>
	<h4>TOTAL: Rp <?php echo $amnt; ?></h4>
	</form>
	<div class='pull-right'>
            <div class="">
                <form method="post" >
                    <input type="hidden" name="item_name" value="CibarCell">
                    <input type="hidden" name="item_number" value="<?php echo $t_id; ?>">
                    <input type="hidden" name="credits" value="510">
                    <input type="hidden" name="userid" value="1">
                    <input type="hidden" name="amount" value="<?php echo $amnt; ?>">
                    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="currency_code" value="PHP">
                    <input type="hidden" name="handling" value="0">
                    <input type="hidden" name="cancel_return" value="function/cancel.php">
                    <input type="hidden" name="return" value="function/success.php">

                    <button type="button" style="display: none;" onclick="handleButtonClick()" class="btn btn-primary">PAYMENT REGISTER</button>
                </form>

                <form id="container" style="padding-bottom: 5px; margin-bottom: 5px; position:relative;" action="payment.php" method="POST">
				<div class="mb-3" style="display: none;">
    <label for="nama" class="form-label">ID Customer</label>
    <input type="text" class="form-control" id="nama" name="customerid" placeholder="Nama Lengkap" required="" value="<?php echo htmlspecialchars($id); ?>">
</div>
<div class="mb-3">
    <label for="pkirim" style="font-size:20px;" class="form-label">PILIHAN PENGIRIMAN</label>
    <select class="form-select" id="pkirim" name="pkirim" required="">
        <option value="" selected disabled>Pilih metode pengiriman</option>
        <option value="J&T Express">J&T Express</option>
        <option value="JNE Express">JNE Express</option>
		<option value="Pos Indonesia">Pos Indonesia</option>
		<option value="SiCepat">SiCepat</option>
		<option value="Anteraja">Anteraja</option>
    </select>
</div>
<div class="mb-3" style="display: none;">
    <label for="nama" class="form-label">Transaksi ID</label>
    <input type="text" class="form-control" id="nama" name="transaction_id" placeholder="TRX Anda" required="" value="<?php echo htmlspecialchars($t_id); ?>">
</div>

<div class="mb-3" style="display: none;">
    <label for="email" class="form-label">EMAIL</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required="" value="<?php echo htmlspecialchars($email); ?>">
</div>

<div class="mb-3" style="display: none;">
    <label for="address" class="form-label">Alamat</label>
    <textarea class="form-control required" id="address" rows="3" name="address"><?php echo htmlspecialchars($address); ?></textarea>
</div>
<div class="mb-3" style="display: none;">
    <label for="amount" class="form-label">Total</label>
    <textarea class="form-control required" id="amount" rows="3" name="amount"><?php echo htmlspecialchars($amnt); ?></textarea>
</div>


                    <button type="submit" class="btn btn-primary">Lanjutkan Pembayaran</button>
                </form>
            </div>
        </div>

        <script>
            function handleButtonClick() {
                // Add logic here to handle the button click
                // For example, you can redirect to another page or perform additional actions
                // For now, I'll show an alert as an example
                alert('Button clicked!');

                // After handling the logic, you can submit the form programmatically
                document.querySelector('form').submit();
            }
        </script>
	</div>
	
	

		<!-- <div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Mode Of Payment</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="image" src="images/button.jpg" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"  />
						<br/>
						<br/>
						<button class="btn btn-lg" >Cash</button>
					</center>
				</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div> -->
			
			
		<br>		
		<br>
		<br>
		<br>
		<br>		
		<br>
		<br>
		<br>
		<br>		
		<br>
		<br>
		<br><br>
<br>
<br>
<br>
</div>
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