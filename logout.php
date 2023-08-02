   <?php 

   	 require_once("inc/verify_login.php");
     session_destroy();
     header("location:index.php?msg=Logout successfull");

     ?>