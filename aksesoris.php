<?php 
	include("function/login.php");
	include("function/customer_signup.php");
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
			<ul>
				<li><a href="#signup"   data-toggle="modal">Daftar</a></li>
				<li><a href="#login"   data-toggle="modal">Masuk</a></li>

				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin-right: 30%;"><a href="aboutus.php">Tentang</a></li>
				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin: 0;"><a href="smartphone.php">Produk</a>
				<li style="display: inline-block; font-size: 20px; padding-left: 10px; margin: 0;"><a href="index.php">Beranda</a></li>
			</ul>
	</div>
		<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Masuk</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email..." style="width:250px;">
						<input type="password" name="password" placeholder="Kata Sandi..." style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Masuk">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
					</form>
			</div>
		</div>
		
		<div id="login1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Please login before purchasing...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<p style="float:left;">No account? <a href="#signup" data-toggle="modal">Sign up here!</a></p>
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	
		<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Daftar</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Nama Depan..." required>
						<input type="text" name="lastname" placeholder="Nama Belakang" required>
						<input type="text" name="address" placeholder="Alamat..." style="width:430px;"required>
						<input type="text" name="country" placeholder="Provinsi..." required>
						<input type="text" name="zipcode" placeholder="Kode Pos..." required maxlength="4">
						<input type="text" name="mobile" placeholder="Ponsel..." maxlength="11">
						<input type="email" name="email" placeholder="Email..." required>
						<input type="password" name="password" placeholder="Kata Sandi..." required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Daftar">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
				</div>
					</form>
			</div>
	<br>
<div id="container">
	<div class="nav" style="padding-bottom: 5%;">
	</div>
	
	<div class="nav1">
		<ul>
				<li><a href="smartphone.php">SmartPhone</a></li>
				<li>|</li>
				<li><a href="aksesoris.php" class="active" style="color:#111;">Aksesoris</a></li>
				<li>|</li>
				<li><a href="gatget.php">Gatged Elektronik</a></li>
		</ul>
	</div>
	
	<div id="content">
		<br />
		<br />
		<div id="product">
			
			<?php 
				
				$query = mysqli_query($conn, "SELECT *FROM product WHERE category='football' ORDER BY product_id DESC") or die (mysqli_error());
				
					while($fetch = mysqli_fetch_array($query))
						{
							
						$pid = $fetch['product_id'];
						
						$query1 = mysqli_query($conn, "SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
						$rows = mysqli_fetch_array($query1);
						
						$qty = $rows['qty'];
						if($qty <= 5){
						
						}else{
							echo "<div class='float'>";
							echo "<center>";
							echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '300px' width = '300px'></a>";
							echo "".$fetch['product_name']."";
							echo "<h4  style=' text-indent:0px;'> Warna: ".$fetch['product_color']."</h4>";
							echo "<h4>Rp ".$fetch['product_price']."</h4>";
							echo "</center>";
							echo "<br />";
							echo "<br />";
							echo "<br />";
							echo "<br />";
							echo "</div>";
						}
							
						}
			?>
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