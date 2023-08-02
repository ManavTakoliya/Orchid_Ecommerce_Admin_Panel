<?php

	require_once("../../inc/connection.php");	
	extract($_POST);
	$photo = rand(10,99).rand(10,99).rand(10,99).$_FILES['filphoto']['name'];
	move_uploaded_file($_FILES['filphoto']['tmp_name'], "../../images/offers/$photo");

	$sql = "insert into offers(pid,discount,photo) values('$pid','$txtdiscount','$photo')";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	$msg = "offer added";
	header("location:../product.php?msg=$msg");


?>