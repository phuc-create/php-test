<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Cửa hàng cám động vật</h1>
	<div class="container">
		<div class="header">
			<a href="#">Trang chủ</a>
			<a href="admin.php">Admin Page</a>
		</div>
		<div class="center">
			<div class="one">
				<?php
				include("config.php");
				$comp = mysqli_query($con,"select * from company");
				while ($row  = mysqli_fetch_array($comp)) {
				    echo"
				    <a href='index.php?id_c=".$row["id_c"]."'>".$row["name_c"]."</a>
					";
				}
				?>
			</div>
			<div class="two">
				<?php
				include("config.php");
				if (isset($_GET["id_c"])) {
					$id_c = $_GET["id_c"];
				$show = mysqli_query($con,"select * from product where id_c='$id_c'");
				while ($r2 = mysqli_fetch_array($show)) {
				    echo"
				
				<div class='box'>
					<img src='img/".$r2["img_p"]."'>
					<h5>".$r2["name_p"]."</h5>
					<p>".$r2["price_p"]."</p>
				</div>";
			}
		}else{
			$show = mysqli_query($con,"select * from product");
				while ($r22 = mysqli_fetch_array($show)) {
				    echo"
				
				<div class='box'>
					<img src='img/".$r22["img_p"]."'>
					<h5>".$r22["name_p"]."</h5>
					<p>".$r22["price_p"]."</p>
				</div>";
			}
		}
				?>
			</div>
		</div>
	</div>
</body>
</html>