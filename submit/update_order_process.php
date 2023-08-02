<?php

	require_once("../../inc/connection.php");
	extract($_POST);

	//echo "update bill set orderstatus='$sltorderstatus' where id='$oid'";
	//exit;

	if($sltorderstatus == 0){

		header("location:../order.php?msg=order status changed");


	}
	else
	{

	$sql = "update bill set orderstatus='$sltorderstatus' where id='$oid'";
	mysqli_query($link,$sql) or die(mysqli_error($link));

	header("location:../order.php?msg=order status changed");
}


?>