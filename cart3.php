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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css">
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
									<td class="profile">Negara:</td><td class="profile"><?php echo $fetch['country'];?></td>
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
	</div>
	
	<div class="nav1">
		<ul>
				<li><a href="cart.php" >Keranjang</a></li>
				<li>|</li>
				<li><a href="cart3.php" class="active" style="color:#111;">Pesanan</a></li>
		</ul>
			
	</div>







	
	<div class="container">
  <div class="row">
     
   <center><h4>
      <br>Pesanan Saya</h4></center>
<br>

<script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>

<table 
  id="table"
  data-toggle="table"
  data-height="460"
  data-pagination="true"
>
  <thead>
    <tr>
      <th data-field="id">NO</th>
      <th data-field="customerid">Nama Pemesan</th>
      <th data-field="transaction_id">Pesanan</th>
      <th data-field="pkirim">Pengiriman</th>
      <th data-field="nominal">Nominal Pembayaran</th>
      <th data-field="status">Status Pembayaran</th>
      <th data-field="hapus">Pelayanan</th>
	  <th data-field="cetak">Cetak Resi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    error_reporting(0);
    $id = (int)$_SESSION['id']; // Get customer ID from session

    $query = mysqli_query($koneksi, "SELECT p.*, c.firstname, c.lastname, GROUP_CONCAT(pr.product_name) as product_names 
                                      FROM pembayaran p 
                                      JOIN customer c ON p.customerid = c.customerid 
                                      JOIN transaction_detail td ON p.transaction_id = td.transaction_id
                                      JOIN product pr ON td.product_id = pr.product_id
                                      WHERE p.customerid = '$id' 
                                      GROUP BY p.customerid, p.transaction_id, p.pkirim, p.amount, p.transaction_status 
                                      ORDER BY p.customerid ASC ");

    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
      $status = $data['transaction_status'];

      echo "<tr>";
      echo "<td>" . $no++ . "</td>";
      echo "<td>" . $data['firstname'] . " " . $data['lastname'] . "</td>";
      echo "<td>" . $data['product_names'] . "</td>"; // Display multiple product names in a single cell
      echo "<td>" . $data['pkirim'] . "</td>";
      echo "<td>" . $data['amount'] . "</td>";

      if ($status >= 3) {
        echo "<td><b> Pembayaran Sukses</b></span></td>";
      } elseif ($status >= 2) {
        echo "<td><b> Pembayaran Panding</b></span></td>";
      } else {
        echo "<td><b> Pembayaran Belum Dilakukan</b></span></td>";
      }

	  echo "<td><a href='contactus1.php?id=" . $data['customerid'] . "' class='btn btn-info'></i> PESAN </a></td>";
    
	  // "CETAK" button linked to resi.php
	  echo "<td><a href='resi.php?customerid=" . $data['customerid'] . "&transaction_id=" . $data['transaction_id'] . "' class='btn btn-info'></i> CETAK </a></td>";
	  echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
	




<br>
<br>
<br>
<br>
<div id="footer" style="text-align: center; background-color: #333; color: white; bottom: 0; width: 100%; position: fixed; height: 5%">
			<p style="font-size:15px; text-align: center;">2023-2024@Cibar Cell</p>
	</div>
</body>
</html>