<?php 

	require_once("../../inc/connection.php");
	
	if(isset($input['email']) == false || isset($input['password']) == false)
	{
		echo "INPUT MISSING";

	}else{

		extract($_REQUEST);

		$encrypted_password = EncryptPassword($password);

		echo $encrypted_password;

		$sql = "INSERT INTO admin(email,password) values($email,'$encrypted_password')";

		mysqli_query($link,$sql) or die(mysqli_error($link));

		echo "ADDED SUCCESSFULLY";
		


	}


?>