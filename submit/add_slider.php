<?php

	require_once("../../inc/connection.php");

	extract($_POST);
	$photo = rand(10,99).rand(10,99).rand(10,99)."_" . $_FILES['filphoto']['name'];
	move_uploaded_file($_FILES['filphoto']['tmp_name'], "../../images/slider/$photo");
	$sql = "insert into slider (productid,photo) values('$pid','$photo')";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	$msg = "Slider Added";
	header("Location:../product.php?msg=$msg");
?>