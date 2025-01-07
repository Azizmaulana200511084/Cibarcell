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
    @media print {
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        a {
            text-decoration: none;
            color: black; /* Sesuaikan dengan warna teks yang diinginkan */
        }
        ul.navigation-print {
            display: none;
        }
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
	
			<ul class="navigation-print">
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
            <svg xmlns="http://www.w3.org/20/svg" viewBox="0 0 1440 320" style="position:fixed; z-index:-1000;">
            <path fill="#333" fill-opacity="1" d="M0,192L12,186.7C24,181,48,171,72,144C96,117,120,75,144,96C168,117,192,203,216,240C240,277,264,267,288,229.3C312,192,336,128,360,112C384,96,408,128,432,138.7C456,149,480,139,504,117.3C528,96,552,64,576,90.7C600,117,624,203,648,245.3C672,288,696,288,720,293.3C744,299,768,309,792,272C816,235,840,149,864,144C888,139,912,213,936,234.7C960,256,984,224,1008,186.7C1032,149,1056,107,1080,80C1104,53,1128,43,1152,37.3C1176,32,1200,32,1224,48C1248,64,1272,96,1296,96C1320,96,1344,64,1368,69.3C1392,75,1416,117,1428,138.7L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
        </svg>
            <br>
            <div id="container">
            </div>

            <div>
            <?php
include "koneksi.php";
error_reporting(0);

// Retrieve customer ID and transaction ID from the URL
$customerid = (int)$_GET['customerid'];
$transaction_id = (int)$_GET['transaction_id'];

$query = mysqli_query($koneksi, "SELECT p.*, c.firstname, c.lastname, GROUP_CONCAT(pr.product_name) as product_names 
                                  FROM pembayaran p 
                                  JOIN customer c ON p.customerid = c.customerid 
                                  JOIN transaction_detail td ON p.transaction_id = td.transaction_id
                                  JOIN product pr ON td.product_id = pr.product_id
                                  WHERE p.customerid = '$customerid' AND p.transaction_id = '$transaction_id'
                                  GROUP BY p.customerid, p.transaction_id, p.pkirim, p.amount, p.transaction_status 
                                  ORDER BY p.customerid ASC ");

$data = mysqli_fetch_array($query);

include "header.php";
?>

<!-- Content of the Receipt -->
<div class="container" style="width: 50%; background-color: rgba(240, 248, 255, 0.5); margin: auto; border: 1px solid #ccc; padding: 20px;">

    <div style="text-align: center;">
        <img src="./img/logo.png" alt="Receipt Image" style="max-width: 40%; height: 10%;">
    </div>

    <h2 style="text-align: center; margin-bottom: 10px;">Resi Pembayaran</h2>

    <table style="width: 100%;">
        <tr>
            <td style="width: 30%;"><strong>Nama Pemesan</strong></td>
            <td>:</td>
            <td><?php echo $data['firstname'] . " " . $data['lastname']; ?></td>
        </tr>
        <tr>
            <td><strong>Pesanan</strong></td>
            <td>:</td>
            <td><?php echo $data['product_names']; ?></td>
        </tr>
        <tr>
            <td><strong>Pengiriman</strong></td>
            <td>:</td>
            <td><?php echo $data['pkirim']; ?></td>
        </tr>
        <tr>
            <td><strong>Alamat</strong></td>
            <td>:</td>
            <td><?php
            $customerid = (int) $data['customerid'];
            $customer_query = mysqli_query($conn, "SELECT address, country, zipcode FROM customer WHERE customerid = '$customerid'");
            $customer_data = mysqli_fetch_assoc($customer_query);
            echo ''. $customer_data['address'] ."&nbsp;"; 
            echo ''. $customer_data['country'] ."&nbsp;"; 
            echo $customer_data['zipcode'];
            ?></td>
        </tr>
        <tr>
            <td><strong>Ponsel</strong></td>
            <td>:</td>
            <td><?php 
            $customerid = (int) $data['customerid'];
            $customer_query = mysqli_query($conn, "SELECT mobile FROM customer WHERE customerid = '$customerid'");
            $customer_data = mysqli_fetch_assoc($customer_query);
            echo $customer_data['mobile'];
            ?></td>
        </tr>
        <tr>
            <td><strong>Total Nominal</strong></td>
            <td>:</td>
            <td>Rp. <?php echo number_format($data['amount'], 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td><strong>Status Pembayaran</strong></td>
            <td>:</td>
            <td>
                <?php
                if ($data['transaction_status'] >= 3) {
                    echo "Pembayaran Sukses";
                } elseif ($data['transaction_status'] >= 2) {
                    echo "Pembayaran Pending";
                } else {
                    echo "Pembayaran Belum Dilakukan";
                }
                ?>
            </td>
        </tr>
    </table>

    <p style="text-align: center;">2023-2024@Cibar Cell</p>

    <!-- Print button -->
    <div style="text-align: center; margin-top: 20px;">
        <button onclick="printReceipt()">Print</button>
    </div>
</div>

<?php include "footer.php"; ?>

<!-- JavaScript to trigger print -->
<script>
    function printReceipt() {
        window.print();
    }
</script>

            </div>


<br>
<br>
<br>
<br>
<div id="footer" style="text-align: center; background-color: #333; color: white; bottom: 0; width: 100%; position: fixed; height: 5%">
			<p style="font-size:15px; text-align: center;">2023-2024@Cibar Cell</p>
	</div>
</body>
</html>