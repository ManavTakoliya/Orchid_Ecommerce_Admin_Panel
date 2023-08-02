
<?php

	require_once("../inc/connection.php");
	$id = $_REQUEST['id'];
	$photo = $_REQUEST['photo'];
	$sql = "delete from category where id=$id ";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	unlink("../images/category/$photo");
	header("location:category.php?msg=Category delete");


?>