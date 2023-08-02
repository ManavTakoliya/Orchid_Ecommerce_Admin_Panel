<?php

	require_once("../../inc/connection.php");

	$sid = $_REQUEST['sid']; 
	$photo = $_REQUEST['photo']; 

	$sql = "delete from slider where id=$sid";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	unlink("../../images/product/$photo");
	$msg = "Slider Deleted";
	header("location:../product.php?msg=$msg");
	

?>