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
              <h3 class="card-title">Add Slider Image</h3>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

            <form method="post" action="submit/add_slider.php" enctype="multipart/form-data">

                 <div class="form-group">
                    <label for="filphoto">Photo</label>
                    <input type="file" name="filphoto" id="filphoto" class="form-control"> 
                 </div>

                 <div>
                    <button class="btn btn-primary float-right" type="submit">Save</button>
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


          <div class="card">

             <!-- CARD header -->
             <div class="card-header">
              <h3 class="card-title">EXISTING IMAGE</h3>
               <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
               </div>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">
            <div class="row">

              <?php

                require_once("../inc/connection.php");
                $sql = "select id,photo from slider where productid='$pid'";
                $result = mysqli_query($link,$sql) or die(mysqli_error($link));

                while($row = mysqli_fetch_assoc($result))
                {

              ?>

              <div class="col-lg-4 mt-3 col-md-6 col-sm-12 col-12">
                <a data-fancybox="gallery"  href="../images/slider/<?php echo $row['photo']; ?>"><img class="img-thumbnail img-fluid" src="../images/slider/<?php echo $row['photo']; ?>" width="300" height="200"></a>
                <div>
              <a href="submit/delete_slider.php?sid=<?php echo $row['id']; ?>&photo=<?php echo $row['photo']; ?>"><i class="center mt-2 fa fa-trash fa-2x"></i></a>
              </div>
              </div>  

              <?php 
                }//end of while
              ?>

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
            <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>
