<?php require_once("inc/verify_login.php") ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php require_once("inc/header_part.php");?> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> 
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">
  <?php require_once("inc/menu.php") ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-4 mt-3 mb-3">
              <h2 class="">PRODUCT MANAGEMENT</h2>
            </div>
          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header bg-primary">
              <h3 class="card-title">Product Offer</h3>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

            <form method="post" action="submit/addoffer.php" enctype="multipart/form-data">


                <div class="form-group">
                   <label for="txtdiscount">Offer Percentage</label>
                  <input type="number" name="txtdiscount" id="txtdiscount" class="form-control" required>

                </div>
               

                 <div class="form-group">
                    <label for="filphoto">Offer Photo</label>
                    <input type="file" name="filphoto" id="filphoto" class="form-control" required> 
                 </div>

                 <div>
                    <button class="btn btn-primary float-right" type="submit">Add</button>
                 </div>

                 <?php

                  $pid = $_REQUEST['pid'];
                 ?>

                 <input type="hidden" name="pid" value="<?php echo $pid; ?>" />

              </form>

              <?php
                require_once("inc/message.php");
              ?>
           </div>
         

         </div>

       </div>
     </div>
        </div>
        
            </div>
          

            <?php 

            require_once("inc/script.php");

            ?>
            <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>
