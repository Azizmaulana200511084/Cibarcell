<?php
	ob_start();
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>CibarCell</title>
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/popover.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/scrollspy.js"></script>
	<script src="../js/alert.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
	<script src="../jscript/jquery-1.9.1.js" type="text/javascript"></script>
	
		<!--Le Facebox-->
		<link href="../facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="../facefiles/jquery-1.9.js" type="text/javascript"></script>
		<script src="../facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
		<script src="../facefiles/facebox.js" type="text/javascript"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox() 
		})
		</script>
	
</head>
<body>
<svg xmlns="http://www.w3.org/20/svg" viewBox="0 0 1440 320" style="position:fixed; z-index:-1000;">
            <path fill="#333" fill-opacity="1" d="M0,192L12,186.7C24,181,48,171,72,144C96,117,120,75,144,96C168,117,192,203,216,240C240,277,264,267,288,229.3C312,192,336,128,360,112C384,96,408,128,432,138.7C456,149,480,139,504,117.3C528,96,552,64,576,90.7C600,117,624,203,648,245.3C672,288,696,288,720,293.3C744,299,768,309,792,272C816,235,840,149,864,144C888,139,912,213,936,234.7C960,256,984,224,1008,186.7C1032,149,1056,107,1080,80C1104,53,1128,43,1152,37.3C1176,32,1200,32,1224,48C1248,64,1272,96,1296,96C1320,96,1344,64,1368,69.3C1392,75,1416,117,1428,138.7L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
        </svg>
	<div id="header" style="position:fixed; background-color: #333; color: white;">
		<img src="../img/logo.png">
		<label>cibarcell</label>
		
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
				
			<ul>
				<li><a href="../function/admin_logout.php"><i class="icon-off icon-white"></i>Keluar</a></li>
				<li>Selamat Datang:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>

		
		<a href="#add" role="button" class="btn btn-info" data-toggle="modal" style="position:absolute;margin-left:222px; margin-top:140px;"><i class="icon-plus-sign icon-white"></i>Tambah</a>
		<div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Tambah Produk</h3>
			</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
					<center>
						<table>
							<tr>
								<td><input type="file" name="product_image" required></td>
							</tr>
							<?php include("random_id.php"); 
							echo '<tr>
								<td><input type="hidden" name="product_code" value="'.$code.'" required></td>
							<tr/>';
							?>
							<tr>
								<td><input type="text" name="product_name" placeholder="Nama Produk..." style="width:250px;" required></td>
							<tr/>
							<tr>
								<td><input type="text" name="product_price" placeholder="Harga..." style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="text" name="product_color" placeholder="Warna..." style="width:250px;" maxLength="20" required></td>
							</tr>
							<tr>
								<td><input type="text" name="brand" placeholder="Merek..." style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="number" name="qty" placeholder="Jumblah Stok..." style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="hidden" name="category" value="football"></td>
							</tr>
						</table>
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="add" value="Tambah">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
					</form>
			</div>
		</div>
		
		<?php
			if (isset($_POST['add']))
				{
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_color = $_POST['product_color'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,98987787866533499);
						
								$name = $code.$_FILES["product_image"] ["name"];
								$type = $_FILES["product_image"] ["type"];
								$size = $_FILES["product_image"] ["size"];
								$temp = $_FILES["product_image"] ["tmp_name"];
								$error = $_FILES["product_image"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../photo/".$name);
			

				$q1 = mysqli_query($conn, "INSERT INTO product ( product_id,product_name, product_price, product_color, product_image, brand, category)
				VALUES ('$product_code','$product_name','$product_price','$product_color','$name', '$brand', '$category')");
				
				$q2 = mysqli_query($conn,"INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");
				
				header ("location:admin_aksesoris.php");
			}}
		}

				?>
			
	<div id="leftnav" style="background-color: #333; color: white;">
		<ul>
			<li><a href="admin_home.php" style="color: white;">Dashboard</a></li>
			<li><a href="admin_home.php" style="color: white;">Produk</a>
				<ul>
					<li><a href="admin_feature.php "style="font-size:15px; margin-left:15px; color: white;">Beranda</a></li>
					<li><a href="admin_smartphone.php "style="font-size:15px; margin-left:15px; color: white;">Smartphone</a></li>
					<li><a href="admin_aksesoris.php" style="font-size:15px; margin-left:15px; color: white;">Aksesoris</a></li>
					<li><a href="admin_gatget.php"style="font-size:15px; margin-left:15px; color: white;">Gatget</a></li>
				</ul>
			</li>
			<li><a href="transaction.php" style="color: white;">Transaksi</a></li>
			<li><a href="customer.php" style="color: white;">Kustomer</a></li>
			<li><a href="message.php" style="color: white;">Pesan</a></li>
			<li><a href="order.php" style="color: white;">Orders</a></li>
		</ul>
	</div>
	
	<div id="rightcontent" style="position:absolute; top:10%; z-index: -1000;">
			<div class="alert alert-info" style="background-color:#333; color:aliceblue;"><center><h2>Aksesoris</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Cari Produk..." id="filter"></label>
			<br />
			
			<div class="alert alert-info" style="background-color:#333; color:aliceblue;">
			<table class="table table-hover" style="background-color:#333; color:aliceblue;">
				<thead>
				<tr style="font-size:20px;">
					<th>Gambar</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Warna</th>
					<th>Stok</th>
					<th>Tindakan</th>
				</tr>
				</thead>
				<tbody>
				<?php
					
					$query = mysqli_query($conn, "SELECT * FROM `product` WHERE category='football' ORDER BY product_id DESC") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['product_id'];
				?>
				<tr class="del<?php echo $id?>">
					<td><img class="img-polaroid" src = "../photo/<?php echo $fetch['product_image']?>" height = "70px" width = "80px"></td>
					<td><?php echo $fetch['product_name']?></td>
					<td><?php echo $fetch['product_price']?></td>
					<td><?php echo $fetch['product_color']?></td>
					
					<?php
					$query1 = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error());
					$fetch1 = mysqli_fetch_array($query1);
					
						$qty = $fetch1['qty'];
					?>
					
					<td><?php echo $fetch1['qty']?></td>
					<td style="width:220px;">
					<?php
					echo "<a href='stockin.php?id=".$id."' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i> Tambah Stok</a> ";
					echo "<a href='stockout.php?id=".$id."' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i> Kurangi Stok</a>";
					?>
					</td>

					<td>
                <!-- Add the delete button with the product ID as the id attribute -->
                <a href='#' id='<?php echo $id ?>' class='btn btn-danger remove' rel='facebox'>
                    <i class='icon-minus-sign icon-white'></i> Hapus
                </a>
            </td>

				</tr>		
				<?php
					}
				?>
				</tbody>
			</table>
			</div>
			
  <?php
  /* stock in */
  if(isset($_POST['stockin'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck + $new_stck;
 
  $que = mysqli_query($conn,"UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  
  header("Location:admin_aksesoris.php");
 }
 
  /* stock out */
 if(isset($_POST['stockout'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck - $new_stck;
 
  $que = mysqli_query($conn, "UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  
  header("Location:admin_aksesoris.php");
 }
  ?>				
			
	
			
</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {
		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");

		
		if(confirm("Are you sure you want to delete this product?")){
			
		
			$.ajax({
			type: "POST",
			url: "../function/remove.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			}
			}); 
			}else{
			return false;}
		});				
	});

</script>