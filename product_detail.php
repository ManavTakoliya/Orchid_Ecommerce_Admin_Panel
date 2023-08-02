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
              <h3 class="card-title">PRODUCT DETAIL</h3>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered table-striped" width="100%">

                  <?php

                    $pid = $_REQUEST['pid'];
                    require_once("../inc/connection.php");
                    $sql = "SELECT p.name, p.price, p.quantity, p.size, p.weight, p.details, categoryid, p.photo, p.islive,c.name 'categoryname' FROM product p , category c WHERE p.id='$pid' and categoryid=c.id";
                    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                    $row = mysqli_fetch_assoc($result);
                  ?>
                  <tr>
                    <th>Name</th>
                    <td><?php echo $row['name']; ?></td>
                  </tr>
                  <tr>
                    <th>Price</th>
                    <td><?php echo $row['price']; ?></td>
                  </tr>
                  <tr>
                    <th>Quantity</th>
                    <td><?php echo $row['quantity']; ?></td>
                  </tr>
                  <tr>
                    <th>Size</th>
                    <td><?php echo $row['size']; ?></td>
                  </tr>
                  <tr>
                    <th>Weight</th>
                    <td><?php echo $row['weight']; ?></td>
                  </tr>
                  <tr>
                    <th>Category</th>
                    <td><?php echo $row['categoryname']; ?></td>
                  </tr>
                  <tr>
                    <th>Photo</th>
                    <td><a data-fancybox="gallery" href="../images/product/<?php echo $row['photo']; ?>"><img src="../images/product/<?php echo $row['photo']; ?>" width="200" height="200"></a></td>
                  </tr>
                  <tr>
                    <th>Details</th>
                    <td><?php echo $row['details']; ?></td>
                  </tr>
                   <tr>
                    <th>IsLive</th>
                    <?php

                      if($row['islive'] == 0)
                      {
                        $islive = "no";
                      }
                      else
                      {
                        $islive = "yes";
                      }

                    ?>
                    <td><?php echo $islive; ?></td>
                  </tr>
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
