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
	<div id="header">
		<img src="img/logo.png">
		<label>CibarCell</label>
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>
			</ul>
	</div>
	
	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	
	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
	<br>
<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href="index.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="smartphone.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus.php">   <i class="icon-bookmark"></i>About Us</a></li>
			</ul>
	</div>
	

	
	
		<div id="content">
			<legend><h3>Kebijakan perusahan</h3></legend>
				<p>The Alphaware Incorporated menghormati privasi para pengunjung
					ke situs web alphaware.com dan situs web lokal yang terhubung dengannya, dan berhati-hatilah untuk melindungi
					informasi.. Kebijakan privasi ini memberi tahu Anda informasi apa yang kami kumpulkan dari Anda, bagaimana kami dapat menggunakannya dan
					langkah-langkah yang kami ambil untuk memastikan bahwa itu dilindungi.</p>
			<hr>
				<h4>Perlindungan informasi pengunjung</h4>
					<p>Untuk melindungi informasi yang Anda berikan kepada kami dengan mengunjungi situs web kami, kami telah menerapkan berbagai
						langkah-langkah keamanan. Informasi pribadi Anda terkandung di balik jaringan aman dan hanya dapat diakses
						oleh sejumlah orang yang memiliki hak akses khusus dan diwajibkan untuk menyimpan informasi tersebut
						rahasia.Harap diingat bahwa setiap kali Anda memberikan informasi pribadi secara online, ada a
						risiko bahwa pihak ketiga dapat mencegat dan menggunakan informasi tersebut. Sedangkan Alphaware berusaha untuk melindungi penggunanya
						informasi pribadi dan privasi, kami tidak dapat menjamin keamanan informasi apa pun yang Anda ungkapkan secara online
						dan Anda melakukannya dengan risiko Anda sendiri.</p>
			<hr>
				<h4>Penggunaan cookie</h4>
					<p>Cookie adalah rangkaian kecil informasi yang ditransfer oleh situs web yang Anda kunjungi ke komputer Anda
						tujuan identifikasi. Cookie dapat digunakan untuk mengikuti aktivitas Anda di situs web dan informasi tersebut
						membantu kami memahami preferensi Anda dan meningkatkan pengalaman situs web Anda. Cookie juga digunakan untuk
						ingat misalnya nama pengguna dan kata sandi Anda.</p>
					<p>Anda dapat mematikan semua cookie, jika Anda memilih untuk tidak menerimanya. Anda juga dapat membuat komputer Anda memperingatkan
						Anda setiap kali cookie sedang digunakan. Untuk kedua opsi tersebut Anda harus menyesuaikan pengaturan browser Anda
						(seperti penjelajah internet). Tersedia juga produk perangkat lunak yang dapat mengelola cookie untuk Anda.
						Perlu diketahui bahwa ketika Anda mengatur komputer Anda untuk menolak cookie, itu dapat membatasi
						fungsionalitas situs web yang Anda kunjungi dan mungkin Anda tidak memiliki akses ke beberapa di antaranya
						fitur di situs web.</p>
			<hr>
				<h4>Kebijakan online</h4>
					<p>Kebijakan Privasi tidak mencakup apa pun yang melekat pada pengoperasian internet, dan
						oleh karena itu di luar kendali adidas, dan tidak akan diterapkan dengan cara apa pun yang bertentangan dengan hukum yang berlaku atau
						regulasi pemerintah. Kebijakan privasi online ini hanya berlaku untuk informasi yang dikumpulkan melalui kami
						situs web dan bukan untuk informasi yang dikumpulkan secara offline.</p>
			
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