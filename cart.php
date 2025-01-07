<?php
	include("function/session.php");
	include("db/dbconn.php");
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
<style>
	#container{
		width: auto;
	}
</style>
<body>
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

				<li style="display: inline-block; font-size: 20px; padding-left: 7px; margin-right: 15%;"><a href="aboutus1.php">Tentang</a></li>
				<li style="display: inline-block; font-size: 20px; padding-left: 7px; margin: 0;"><a href="smartphone1.php">Produk</a>
				<li style="display: inline-block; font-size: 20px; padding-left: 7px; margin: 0;"><a href="home.php">Beranda</a></li>
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
									<td class="profile">Nama:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php 
									// echo $fetch['mi'];?>&nbsp;<?php
									echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Alamat:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Negara:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">Kode Pos:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Ponsel:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<!-- <tr>
									<td class="profile">No Telephon :</td><td class="profile"><?php 
									// echo $fetch['telephone'];?></td>
								</tr> -->
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
	</div>
	
	<div class="nav1">
		<ul>
				<li><a href="cart.php" class="active" style="color:#111;">Keranjang</a></li>
				<li>|</li>
				<li><a href="cart3.php">Pesanan</a></li>
		</ul>
			
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
	
	
	<form method="post" class="well" style="background-color:#fff;">
	<table class="table">
	<label style="font-size:20px;"><center><h4>Keranjang Pesanan</h4></center></label>
		<tr>
			<th><h4>Gambar</h4></td>
			<th><h4>Nama Produk</h4></th>
			<th><h4>Warna</h4></th>
			<th><h4>Jumblah</h4></th>
			<th><h4>Harga</h4></th>
			<th><h4>Tambah</h4></th>
			<th><h4>Hapus</h4></th>
			<th><h4>Total</h4></th>
		</tr>
	
<?php


	if (isset($_GET['id']))
	$id=$_GET['id'];
	else
	$id=1;
	if (isset($_GET['action']))
	$action=$_GET['action'];
	else
	$action="empty";

	switch($action)
	{
		
		case "view":
			if (isset($_SESSION['cart'][$id]))
			$_SESSION['cart'][$id];
		break;
		case "add":
			if (isset($_SESSION['cart'][$id]))
			$_SESSION['cart'][$id]++;
			else
			$_SESSION['cart'][$id]=1;
		break;
		case "remove":
			if (isset($_SESSION['cart'][$id]))
			{
				$_SESSION['cart'][$id]--;
				if ($_SESSION['cart'][$id]==0)
				unset($_SESSION['cart'][$id]);
			}
		break; 
		case "empty":
			unset($_SESSION['cart']);
		break;
	}
if (isset($_SESSION['cart']))
	{	
	
	$total=0;
	foreach($_SESSION['cart'] as $id => $x)
	{
	$result=mysqli_query($conn, "Select * from product where product_id=$id");
	$myrow=mysqli_fetch_array($result);
	$name=$myrow['product_name'];
	$name=substr($name,0,40);
	$price=$myrow['product_price'];
	$image=$myrow['product_image'];
	$product_color=$myrow['product_color'];
	$line_cost=$price*$x;
	$total=$total+$line_cost;
	
	
		echo "<tr class='table'>";
		echo "<td><h4><img height='70px' width='70px' src='photo/".$image."'></h4></td>";
		echo "<td><h4><input type='hidden' required value='".$id."' name='pid[]'> ".$name."</h4></td>";
		echo "<td><h4>".$product_color."</h4></td>";
		echo "<td><h4><input type='hidden' required value='".$x."' name='qty[]'> ".$x."</h4></td>";
		echo "<td><h4>".$price."</h4></td>";
		echo "<td><h4><a href='cart.php?id=".$id."&action=add'><i class='icon-plus-sign'></i></a></td>";
		echo "<td><h4><a href='cart.php?id=".$id."&action=remove'><i class='icon-minus-sign'></i></a></td>";
		echo "<td><strong><h3>Rp ".$line_cost."</h3></strong>";
		echo "</tr>";
		}
		
		echo"<tr>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td><h2>TOTAL:</h2></td>";
		echo "<td><strong><input type='hidden' value='".$total."' required name='total'><h2 class='text-danger'>Rp ".$total."</h2></strong></td>";
		echo "<td></td>";
		echo "<td><a class='btn btn-danger btn-sm pull-right' href='cart.php?id=".$id."&action=empty'><i class='fa fa-trash-o'></i> Kosongkan Keranjang</a></td>";		
		echo "</tr>";
	}
 	else
		echo "<font color='#111' class='alert alert-error' style='float:right'>Keranjang Kosong</font>";

?>
	</table>
	
			
	<div class='pull-right'>
	<a href='home.php' class='btn btn-inverse btn-lg'>Tambah Barang</a>
	<?php include ("function/paypal.php");
	?>
	<button name='pay_now' type='submit' class='btn btn-inverse btn-lg' >Pesan Sekarang</button>
	</form>

	


	</div>

		<div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Mode Pembayaran</h3>
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
		</div>
			
		<br />		
		<br />	
</div>

<br />
<br>
<br>
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