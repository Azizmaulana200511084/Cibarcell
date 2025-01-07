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

	<div id="carousel" style="width: 100%; padding-bottom: 1%; background-color: rgba(240, 248, 255, 0.5);">
		<div id="myCarousel" class="carousel slide" style="width: 100%; padding-bottom: 1%;">
			<div class="carousel-inner" style="padding-bottom: 1%;">
				<div class="active item" style="width: 100%; padding-bottom: 1%; border-bottom:0 solid #111;"><img src="img/1.png" class="carousel" style="width: 100%;"></div>
				<div class="item" style="width: 100%; padding-bottom: 1%; border-bottom:0 solid #111;"><img src="img/2.png" class="carousel" style="width: 100%;"></div>
			</div>
				<a  href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a  href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	<br />
	<br />
	
	<legend style="background-color: rgba(240, 248, 255, 0.5);"><center>Tentang</center></legend>
		<div id="content" style="background-color: rgba(240, 248, 255, 0.5);">
			<legend><h3>Misi</h3></legend>
					<h4 style="text-indent:60px;">
					Menjadi pilihan utama dan terpercaya dalam dunia teknologi, "Cibarcell" berkomitmen untuk menyediakan pengalaman terbaik bagi pelanggan yang mencari smartphone, gadget, dan aksesori berkualitas tinggi dengan inovasi terkini.
					</h4>
			<br />
			<legend><h3>Visi</h3></legend>
					<h4 style="text-indent:60px;">
					<h4>1. Pilihan Terlengkap</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyediakan rangkaian produk terlengkap, termasuk smartphone terbaru, gadget pintar, dan aksesori teknologi yang memenuhi kebutuhan beragam pelanggan.</p>
					<h4>2. Inovasi Teknologi</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyajikan produk-produk terkini dan inovatif, serta menjadi pusat inspirasi untuk pelanggan yang menginginkan teknologi terkini dan kekinian.</p>
					<h4>3. Pelayanan Pelanggan Unggul</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memberikan pelayanan pelanggan yang ramah, profesional, dan responsif, dengan staf yang terlatih untuk membantu pelanggan dalam memilih produk yang sesuai dengan kebutuhan mereka.</p>
					<h4>4. Kualitas Terjamin</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menjual produk dengan kualitas terjamin dari merek-merek terkemuka, dengan fokus pada keandalan, performa, dan desain yang memukau.</p>
					<h4>5. Harga Kompetitif</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menawarkan harga yang kompetitif untuk memastikan pelanggan mendapatkan nilai terbaik dari setiap pembelian mereka.</p>
					<h4>6. Pertumbuhan Berkelanjutan</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengembangkan bisnis dengan keberlanjutan, menjaga hubungan baik dengan mitra, dan terus memperluas jaringan toko untuk lebih mendekati pelanggan.</p>
					<h4>7. Edukasi Teknologi</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memberikan informasi dan edukasi kepada pelanggan tentang teknologi terkini, memberikan panduan yang jelas mengenai spesifikasi produk, dan membantu mereka memahami keunggulan teknologi terbaru.</p>
					<h4>8. Komitmen Lingkungan</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengadopsi praktik bisnis yang ramah lingkungan, termasuk daur ulang produk dan penggunaan kemasan yang berkelanjutan, untuk mendukung upaya pelestarian lingkungan.</p>
					</h4>
			<br />
				
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