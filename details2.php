<?php

	//include("function/session.php");
	include("db/dbconn.php");
	include("function/cash.php");
	include("function/paypal.php");
?>
<!DOCTYPE html>
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
</head>
<body>
	<div id="header" style="position: fixed; background-color: #333; color: white; top: 0; z-index: 1000;">
		<img src="img/logo.png">
		<label>CibarCell</label>
			
			<?php
			?>
	
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>

				<li style="display: inline-block; font-size: 20px; padding-left: 7px; margin-right: 20%;"><a href="aboutus1.php">About Us</a></li>
				<li style="display: inline-block; font-size: 20px; padding-left: 7px; margin: 0;"><a href="smartphone1.php">Product</a>
				<li style="display: inline-block; font-size: 20px; padding-left: 7px; margin: 0;"><a href="home.php">Home</a></li>
			</ul>
	</div>
	
	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];
			
								$query = mysql_query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysql_error());
								$fetch = mysql_fetch_array ($query);
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php ?>&nbsp;<?php 
									echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
			<svg xmlns="http://www.w3.org/20/svg" viewBox="0 0 1440 320" style="position:fixed; z-index:-1000;">
            <path fill="#333" fill-opacity="1" d="M0,192L12,186.7C24,181,48,171,72,144C96,117,120,75,144,96C168,117,192,203,216,240C240,277,264,267,288,229.3C312,192,336,128,360,112C384,96,408,128,432,138.7C456,149,480,139,504,117.3C528,96,552,64,576,90.7C600,117,624,203,648,245.3C672,288,696,288,720,293.3C744,299,768,309,792,272C816,235,840,149,864,144C888,139,912,213,936,234.7C960,256,984,224,1008,186.7C1032,149,1056,107,1080,80C1104,53,1128,43,1152,37.3C1176,32,1200,32,1224,48C1248,64,1272,96,1296,96C1320,96,1344,64,1368,69.3C1392,75,1416,117,1428,138.7L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
        </svg>
	
	
	
	<br>
<div id="container">
	<div class="nav" style="padding-bottom: 5%;">
	</div>
		<?php 
			if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = mysql_query("SELECT * FROM product WHERE product_id = '$id' ");
			$row = mysql_fetch_array($query);
		?>
				<div>
					<center>
						<img class="img-polaroid" style="width:400px; height:350px;" src="photo/<?php echo $row['product_image']; ?>">
						<h2 class="text-uppercase bg-primary"><?php echo $row['product_name']?></h2>
						<h3 class="text-uppercase">Rp <?php echo $row['product_price']?></h3>
						<h3 class="text-uppercase">Warna: <?php echo $row['product_color']?></h3>
						<?php echo "<a href='cart2.php?id=".$id."&action=add'><input type='submit' class='btn btn-inverse' name='add' value='Add to Cart'></a> &nbsp;  <a href='smartphone.php'><button class='btn btn-inverse'>Back</button></a> " ?>
					</center>
				</div>
		<?php }?>
		
		<div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Mode Of Payment</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="hidden" name="product_price" value="<?php echo $row['product_price']?>">
						<input type="hidden" name="product_name" value="<?php echo $row['product_name']?>">
						<input type="hidden" value="<?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['lastname'];?>" name="customer">
						<textarea name="destination" placeholder="Destination" style="height:100px; width:250px;" required></textarea>
						<select name="size" required style="width:150px;">
							<option value="">---------Warna----------</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<br />
						<h4>Total: Rp <?php echo $row['product_price']; ?> </h4>
						<br />
						<input type="checkbox" required> I Agree the <a href="#terms" data-toggle="modal"> Terms and Condition</a> of AlphaWare Inc.
					</center>
				</div>
			<div class="modal-footer">
				<center>
					<input type="image" src="images/button.jpg" border="0" name="paypal" alt="Make payments with PayPal - it's fast, free and secure!"  />
					<input type="submit" name="cash" value="Cash" class="btn btn-lg">
				</center>
					<button class="btn btn-danger btn-mini" data-dismiss="modal" aria-hidden="true">Cancel</button>
					</form>
			</div>
		</div>
		
		<div id="terms" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">AlphaWare Inc. Terms and Condition</h3>
			</div>
				<div class="modal-body">
					<ul>
						<li>Anda dijamin bahwa produk Anda akan dikirim 2-3 hari setelah pemesanan.</li>
						<li>Waktu yang dijamin mungkin ditangguhkan tergantung pada kondisi cuaca untuk keselamatan personel pengiriman kami.</li>
						<li>Informasi harga dan ketersediaan dapat berubah tanpa pemberitahuan.</li>
						<li>Cara pembayaran adalah sebagai berikut: pelanggan dengan akun paypal dapat membayar melalui paypal jika tidak, Cash on Delivery (COD).</li>
						<li>Setelah menerima produk Anda, kami akan mengenakan biaya pengiriman .</li>
					</ul>
				</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>





</div>
		<br />
		<br>
<br>
<br>
<br>
</div>
	<br />
	<div id="footer" style="text-align: center; background-color: #333; color: white; bottom: 0; width: 100%; position: fixed; height: 5%">
			<p style="font-size:15px; text-align: center;">2023-2024@Cibar Cell</p>
	</div>
</body>
</html>