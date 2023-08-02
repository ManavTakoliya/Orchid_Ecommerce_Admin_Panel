<?php

	require_once("../../inc/connection.php");
	extract($_POST);

	$photo = rand(10,99).rand(10,99).rand(10,99) . "_" . $_FILES['filphoto']['name'];
	move_uploaded_file($_FILES['filphoto']['tmp_name'],"../../images/product/$photo");


	$sql = "INSERT INTO product(name, price, quantity, size, weight, details, categoryid, photo, islive) VALUES ('$txtname','$txtprice','$txtquantity','$txtsize','$txtweight','$txtdetails','$sltcategoryid','$photo','$rdoislive')";

	mysqli_query($link,$sql) or die(mysqli_error($link));
	$msg = "Product Added";
	header("Location:../product.php?msg=$msg");



?>