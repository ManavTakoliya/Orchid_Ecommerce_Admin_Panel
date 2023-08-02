<?php

	require_once("../inc/connection.php");

	$pid = $_REQUEST['pid'];
	$photo = $_REQUEST['pphoto'];

	$sql = "select photo from slider where productid='$pid'";
	$result = mysqli_query($link,$sql) or die(mysqli_error($link));
	
	while($row = mysqli_fetch_assoc($result))
	{

		$aa[] = $row['photo'];
		
	}

    $count = count($aa);
   
    for($i = 0; $i < $count; $i++) {
 
          unlink ("../images/product/$aa[$i]"); 
    }


    $sql1 = "delete from slider where productid='$pid'";
    mysqli_query($link,$sql1) or die(mysqli_error($link));

     $sql2 = "delete from product where id='$pid'";
     mysqli_query($link,$sql2) or die(mysqli_error($link));

     unlink("../images/product/$photo");

     $msg = "Product Deleted Successfully";
     header("location:product.php?msg=$msg");





exit;
?>