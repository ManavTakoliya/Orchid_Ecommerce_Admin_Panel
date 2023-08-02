<?php
    
    session_start(); //start session if has to be on very first line of file
    require_once("../../inc/connection.php");
    extract($_POST);
    

    $sql = "select * from admin where email='$txtemail'";

  //echo "select * from admin where email='$txtemail'";

    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    if($count == 0)
    {
    	header("location:../index.php?msg=Invalid Login Attemp");
    }
    else
		{
	    if(MatchPassword($row['password'],$txtpassword) != true)
	    {
	    	$_SESSION['id'] = $row['id'];
	    	header("location:../deshbord.php?msg=Login Successfully");
	    }
	    else
	    {
	    	header("location:../index.php?msg=Incorrect Password");
	    }
		}

	
?>