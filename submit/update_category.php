<?php

	require_once("../../inc/connection.php");

	extract($_POST);

	if(strlen($_FILES['filphoto']['name']) >= 1)
	{
		$photo = rand(10,99) . rand(10,99) . rand(10,99) . "_" . $_FILES['filphoto']['name'];
		move_uploaded_file($_FILES['filphoto']['tmp_name'],"../../images/category/$photo");
		unlink("../../images/category/$oldphoto");
		echo "string";

	}
	else
	{
		$photo = $oldphoto;

	}
	
	$sql = "update category set name='$txtname' , photo='$photo' , islive='$rdoislive' where id='$catid' ";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	$msg="Category Updated";
	header("location:../category.php?msg=$msg");
?>