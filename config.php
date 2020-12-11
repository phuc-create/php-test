<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'php-test');
mysqli_query($con,'set name"utf8"');
?>