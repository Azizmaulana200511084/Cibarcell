<?php
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
	
	
		<script type="text/javascript" src="../chart/chart.js"></script>

<script src="../chart/highcharts.js"></script>
<script src="../chart/exporting.js"></script>

		<script type="text/javascript">
$(function () {

    Highcharts.getOptions().plotOptions.pie.colors = (function () {
        var colors = [],
            base = Highcharts.getOptions().colors[0],
            i;

        for (i = 0; i < 10; i += 1) {
            colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
        }
        return colors;
    }());

    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Product of the Year <?php echo $date = date("Y"); ?>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Share',
            data: [
				<?php 
				$result = mysqli_query($conn, "SELECT brand FROM product Group by brand");
				while($row = mysqli_fetch_array($result)){
				
				$brnd = $row['brand'];
				
				$result1 = mysqli_query($conn, "SELECT * FROM product WHERE brand = '$brnd'");
				$row1 = mysqli_num_rows($result1);
				
				echo "['".$brnd."',   ".$row1."],";
				
				}
				?>
				
            ]
        }]
    });
});
		</script>

</head>
<body>

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
				<li>Selamat Datang:&nbsp;&nbsp;&nbsp;<a><i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	<svg xmlns="http://www.w3.org/20/svg" viewBox="0 0 1440 320" style="position:fixed; z-index:-1000;">
            <path fill="#333" fill-opacity="1" d="M0,192L12,186.7C24,181,48,171,72,144C96,117,120,75,144,96C168,117,192,203,216,240C240,277,264,267,288,229.3C312,192,336,128,360,112C384,96,408,128,432,138.7C456,149,480,139,504,117.3C528,96,552,64,576,90.7C600,117,624,203,648,245.3C672,288,696,288,720,293.3C744,299,768,309,792,272C816,235,840,149,864,144C888,139,912,213,936,234.7C960,256,984,224,1008,186.7C1032,149,1056,107,1080,80C1104,53,1128,43,1152,37.3C1176,32,1200,32,1224,48C1248,64,1272,96,1296,96C1320,96,1344,64,1368,69.3C1392,75,1416,117,1428,138.7L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
        </svg>
	
	<br>
	
	<div id="leftnav" style="background-color: #333; color: white;">
		<ul>
			<li><a href="admin_home.php" style="color: white;">Dashboard</a></li>
			<li><a href="admin_home.php" style="color: white;">Produk</a>
				<ul >
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
	
	<div id="container" style="min-width: 310px; height: 600px; max-width: 1000px; margin: 0 auto; background:none; float:left;"></div>

				
	
	</div>

</body>
</html>
