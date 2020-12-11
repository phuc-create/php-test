<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Load....</title>
</head>
<body>
	<?php
	include("config.php");
	if (isset($_POST["submit"])) {
		$ten = $_POST["ten"];
		$gia = $_POST["gia"];
		$mota = $_POST["mota"];
		$cty = $_POST["cty"];
		$anh = $_FILES["anh"]["name"];
		$type = $_FILES["anh"]["type"];
		$size = $_FILES["anh"]["size"];
echo $type."<br>".$size;
		if ($type=="image/png" || $type =="image/jpeg") {
			if ($size < 1024*1024) {
				if($gia >0){
					if(move_uploaded_file($_FILES["anh"]["tmp_name"],"img/".$anh)){
					$them = mysqli_query($con,"INSERT INTO product (id_p, name_p, price_p, img_p, mota_p, id_c) VALUES (NULL, '$ten', '$gia', '$anh', '$mota', '$cty')");
					if ($them) {
						echo "<script>alert('Congratulation!!!!CHúc mừng')</script>";
						header("refresh:0;url=admin.php");					}
				}else{
						echo "<script>alert('Có lỗi gì đó khi úp ảnh')</script>";
						header("refresh:0;url=admin.php");
				}
				}else{
					echo "<script>alert('Cửa hàng không sử dụng tiền âm phủ')</script>";
					header("refresh:0;url=admin.php");
				}
			}else{
				echo "<script>alert('Chỉ nhận ảnh có kích thước nhỏ hơn 1mb')</script>";
				header("refresh:0;url=admin.php");
				}
		}else{
			echo "<script>alert('Chỉ nhận ảnh png và jpg')</script>";
			header("refresh:0;url=admin.php");
		}
	}
	?>
</body>
</html>