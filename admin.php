<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<a href="index.php">Trang chủ</a>
			<a href="admin.php">Admin Page</a>
		</div>
		<div class="center">
			<div class="one">
				<p>Thêm sản phẩm bên góc phải</p>
			</div>
			<div class="two">
				<form method="post" action="xl.php" enctype="multipart/form-data">
					<h3>Thêm sản phẩm mới</h3>
					<input type="text" name="ten" placeholder="Nhập tên sản Ppẩm">
					<input type="number" name="gia" placeholder="Nhập giá sản phẩm">
					<input type="file" name="anh">
					<textarea name="mota" placeholder="Nhập mô tả"></textarea>
					<select name="cty">
						<?php
				include("config.php");
				$show = mysqli_query($con,"select * from company");
				while ($r2 = mysqli_fetch_array($show)) {
				    echo"
					<option value='".$r2["id_c"]."'>".$r2["name_c"]."</option>
				";
			}
			?>
					</select>
					<input type="submit" name="submit" value="Thêm">
				</form>
			</div>
		</div>
	</div>
</body>
</html>