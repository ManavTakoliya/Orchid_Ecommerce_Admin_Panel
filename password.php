<?php
    
     $password = $_REQUEST['password'];
     $options = ['cost' => 12];
     $encryptedpassword  = password_hash($password,PASSWORD_DEFAULT, $options);
     echo $encryptedpassword;

?>