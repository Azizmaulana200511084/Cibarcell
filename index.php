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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">

	<script>
    function checkLoginAndRedirect(productId) {
        <?php if (!isset($_SESSION['user_id'])) { ?>
            $('#login').modal('show');
        <?php } else { ?>
            window.location.href = 'details.php?id=' + productId;
        <?php } ?>
    }
</script>

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
		<svg xmlns="http://www.w3.org/20/svg" viewBox="0 0 1440 320" style="position:fixed; z-index:-1000;">
            <path fill="#333" fill-opacity="1" d="M0,192L12,186.7C24,181,48,171,72,144C96,117,120,75,144,96C168,117,192,203,216,240C240,277,264,267,288,229.3C312,192,336,128,360,112C384,96,408,128,432,138.7C456,149,480,139,504,117.3C528,96,552,64,576,90.7C600,117,624,203,648,245.3C672,288,696,288,720,293.3C744,299,768,309,792,272C816,235,840,149,864,144C888,139,912,213,936,234.7C960,256,984,224,1008,186.7C1032,149,1056,107,1080,80C1104,53,1128,43,1152,37.3C1176,32,1200,32,1224,48C1248,64,1272,96,1296,96C1320,96,1344,64,1368,69.3C1392,75,1416,117,1428,138.7L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
        </svg>
	<br>

<div id="container">
	<script>
   $(document).ready(function(){
      $('#myCarousel').carousel();
   });
</script>

	<div id="carousel" style="width: 100%;">
		<div id="myCarousel" class="carousel slide" style="width: 100%;">
			<div class="carousel-inner">
				<div class="active item" style="width: 100%; padding:0; border-bottom:0 solid #111;"><img src="img/banner1.jpg" class="carousel" style="width: 100%;"></div>
				<div class="item" style="width: 100%; padding:0; border-bottom:0 solid #111;"><img src="img/banner2.jpg" class="carousel" style="width: 100%;"></div>
				<div class="item" style="width: 100%; padding:0; border-bottom:0 solid #111;"><img src="img/banner3.jpg" class="carousel" style="width: 100%;"></div>
				<div class="item" style="width: 100%; padding:0; border-bottom:0 solid #111;"><img src="img/banner4.jpg" class="carousel" style="width: 100%;"></div>
				<div class="item" style="width: 100%; padding:0; border-bottom:0 solid #111;"><img src="img/banner5.jpg" class="carousel" style="width: 100%;"></div>
				<div class="item" style="width: 100%; padding:0; border-bottom:0 solid #111;"><img src="img/banner6.jpg" class="carousel" style="width: 100%;"></div>
				<div class="item" style="width: 100%; padding:0; border-bottom:0 solid #111;"><img src="img/banner7.jpg" class="carousel" style="width: 100%;"></div>
				<div class="item" style="width: 100%; padding:0; border-bottom:0 solid #111;"><img src="img/banner8.jpg" class="carousel" style="width: 100%;"></div>
			</div>
				<a  href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a  href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>

	
	<div id="content">
		<div id="product" style="width: 100%; margin-top: 0%; text-align: center;">
			<center><h2><legend>Produk</legend></h2></center>
			<br />
			
			<?php 
				
				$query = mysqli_query($conn, "SELECT *FROM product WHERE category='feature' ORDER BY product_id DESC") or die (mysqli_error());
				
					while($fetch = mysqli_fetch_array($query))
						{
							
						$pid = $fetch['product_id'];
						
						$query1 = mysqli_query($conn, "SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
						$rows = mysqli_fetch_array($query1);
						
						$qty = $rows['qty'];
						if($qty <= 5){
						
						}else{
							echo "<div class='float' style='background-color: rgba(240, 248, 255, 0.5);'>";
							echo "<center>";
							echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '300px' width = '300px'></a>";
							echo "".$fetch['product_name']."";
							echo "<h4 style='background-color: rgba(240, 248, 255, 0.5); text-indent:0px;'> Warna: ".$fetch['product_color']."</h4>";
							echo "<h4 style='background-color: rgba(240, 248, 255, 0.5);'>Rp ".$fetch['product_price']."</h4>";
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
	<div id="footer" style="text-align: center; background-color: #333; color: white; bottom: 0; width: 100%; position: fixed; height: 5%">
			<p style="font-size:15px; text-align: center;">2023-2024@Cibar Cell</p>
	</div>
</body>
</html>