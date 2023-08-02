<?php

	require_once("../../inc/connection.php");

	extract($_POST);

	if(strlen($_FILES['filphoto']['name'])>=1)
	{
		$photo = rand(10,99) . rand(10,99) . rand(10,99) . "_" . $_FILES['filphoto']['name'];
		move_uploaded_file($_FILES['filphoto']['tmp_name'],"../../images/product/$photo");
		unlink("../../images/product/$oldphoto");

	}else{

		$photo = $oldphoto;
	}

	$sql = "UPDATE product SET name='$txtname',price='$txtprice',quantity='$txtquantity',size='$txtsize',weight='$txtweight',details='$txtdetails',categoryid='$sltcategoryid',photo='$photo',islive='$rdoislive' where id='$pid' ";
	
	mysqli_query($link,$sql) or die(mysqli_error($link));

	$msg = "product updated";
	header("location:../product.php?msg=$msg");


?>