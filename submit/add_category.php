<?php

	require_once("../../inc/connection.php");

	extract($_POST);

	$photo = rand(10,99) . rand(10,99) . rand(10,99) .  "_" . $_FILES['filphoto']['name'];
	move_uploaded_file($_FILES['filphoto']['tmp_name'],"../../images/category/$photo");
	

	$sql = "insert into category (name,photo,islive) values ('$txtname','$photo','$rdoislive')";
	mysqli_query($link,$sql) or die (mysqli_error($link));
	header("Location:../category.php?msg=Category Added");
?>