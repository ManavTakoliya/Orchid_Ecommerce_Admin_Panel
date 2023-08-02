<?php


	require_once("../../inc/connection.php");
	require_once("../../inc/function.php");

	extract($_POST);
	

	

	SendMail($txtemail,$txtsubject,$txtcontent);

	



?>