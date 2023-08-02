<?php require_once("inc/verify_login.php") ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <?php require_once("inc/header_part.php");?>  

</head>

<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">
  <?php require_once("inc/menu.php") ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-4 mt-3 mb-3">
              <h2 class="text-center bg-white">Change Password</h2>
            </div>
          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

           <div class="card-body">

            <form role="form">
              <div class="form-group">
                <label for="txtoldpassword">Old Password *</label>
                <input type="text" name="txtoldpassword" class="form-control" id="txtoldpassword" placeholder="">
              </div>
                <div class="form-group">
                <label for="txtnewpassword">New Password *</label>
                <input type="text" name="txtnewpassword" class="form-control" id="txtnewpassword" placeholder="">
              </div>
                <div class="form-group">
                <label for="txtconfirmpassword">Confirm New Password *</label>
                <input type="text" name="txtconfirmpassword" class="form-control" id="txtconfirmpassword" placeholder="">
              </div>
            </form>
            <div>
              <a><button type="button" class="btn btn-primary">Save Changes</button></a>
            </div>
          
           </div>

         </div>
       </div>
     </div>
        </div>
        
            </div>
          

            <?php 

            require_once("inc/script.php");

            ?>
</body>
</html>
