<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>CibarCell</title>
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
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
	
			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>Keluar</a></li>
				<li><a href="#profile" href  data-toggle="modal">Selamat Datang:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>	
	</div>
	<svg xmlns="http://www.w3.org/20/svg" viewBox="0 0 1440 320" style="position:fixed; z-index:-1000;">
            <path fill="#333" fill-opacity="1" d="M0,192L12,186.7C24,181,48,171,72,144C96,117,120,75,144,96C168,117,192,203,216,240C240,277,264,267,288,229.3C312,192,336,128,360,112C384,96,408,128,432,138.7C456,149,480,139,504,117.3C528,96,552,64,576,90.7C600,117,624,203,648,245.3C672,288,696,288,720,293.3C744,299,768,309,792,272C816,235,840,149,864,144C888,139,912,213,936,234.7C960,256,984,224,1008,186.7C1032,149,1056,107,1080,80C1104,53,1128,43,1152,37.3C1176,32,1200,32,1224,48C1248,64,1272,96,1296,96C1320,96,1344,64,1368,69.3C1392,75,1416,117,1428,138.7L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
        </svg>
		<br>
<div id="container" style='padding-top:20px; background-color: rgba(240, 248, 255, 0.5);'>	
		

							<?php
			
								$id = (int) $_SESSION['id'];
			
								$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = mysqli_fetch_array ($query);
								{
									$firstname=$fetch['firstname'];
									$lastname=$fetch['lastname'];
									$address=$fetch['address'];
									$country=$fetch['country'];
									$zipcode=$fetch['zipcode'];
									$mobile=$fetch['mobile'];
									$email=$fetch['email'];
									$password=$fetch['password'];
									$customerid=$fetch['customerid'];
								}
						?>
				<div id="account">
					<form method="POST" action="function/edit_customer.php">
						<center>
						<h3>Akun Saya</h3>
							<table>
								<tr>
									<td>Nama Depan:</td><td><input type="text" name="firstname" placeholder="Nama depan..." style="width:430px;" required value="<?php echo $firstname; ?>"></td>
								</tr>
								<tr>
									<td>Nama Belakang:</td><td><input type="text" name="lastname" placeholder="Nama Belakang..." style="width:430px;" required value="<?php  echo $lastname;?>"></td>
								</tr>
								<tr>
									<td>Alamat:</td><td><input type="text" name="address" placeholder="Alamat..." style="width:430px;" required value="<?php echo $address;?>"></td>
								</tr>
								<tr>
									<td>Propinsi:</td><td><input type="text" name="country" placeholder="Provinsi..." style="width:430px;" required value="<?php echo $country;?>"></td>
								</tr>
								<tr>
									<td>Kode Pos:</td><td><input type="text" name="zipcode" placeholder="Kode pos..." style="width:430px;" required value="<?php echo $zipcode;?>" maxlength="5"></td>
								</tr>	
								<tr>	
									<td>No Handphone:</td><td><input type="text" name="mobile" placeholder="Nomor telepon..." style="width:430px;" value="<?php echo $mobile;?>" maxlength="13"></td>
								</tr>
								<tr>
									<td>Email:</td><td><input type="email" name="email" placeholder="Email..." style="width:430px;" required value="<?php echo $email;?>"></td>
								</tr>
								<tr>
									<td>Password</td><td><input type="password" name="password" placeholder="Sandi..." style="width:430px;" required value="<?php echo $password;?>"></td>
								</tr>
								<tr>
									<td></td><td><input type="submit" style="width:380px;" name="edit" value="Simpan" class="btn btn-primary">&nbsp;<a href="home.php"><input type="button" name="cancel" value="Batal" class="btn btn-danger"></a></td>
								</tr>
							</table>	
						</center>
					</form>
				</div>
	<br>
	<br>
<br>
<br>
<br>
</div>
</body>
</html>