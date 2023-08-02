a<?php require_once("inc/verify_login.php") ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMIN PANEL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php require_once("inc/header_part.php");?>  
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
              <h3 class="card-title">ADD Product</h3>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

             <form method="POST" action="submit/add_product.php" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label for="txtname">Name</label>
                    <input type="name" name="txtname" class="form-control" id="txtname" required placeholder="Enter Name">
                  </div>



                  <div>
                    <label for="sltcategoryid">Select Category</label>
                    <select required id="sltcategoryid" class="form-control" name="sltcategoryid">
                      
                      <option value="">Select</option>

                 <?php
                    require_once("../inc/connection.php");
                    $sql = "select id,name from category";
                    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                    while ($row = mysqli_fetch_assoc($result))
                     {
                  ?>
                      <option value=<?php echo $row['id']; ?>><?php echo $row['name']; ?></option>

                    <?php

                     } // end of while 

                    ?>
                    </select>

                  </div>

                  <div class="form-group mt-2">
                    <label for="txtprice">Price</label>
                    <input required type="number" name="txtprice" class="form-control" id="txtprice" placeholder="Enter price">
                  </div>

                  <div class="form-group">
                    <label for="txtquantity">Quantity</label>
                    <input required type="number" class="form-control" name="txtquantity" id="txtquantity" placeholder="Enter Quantity">
                  </div>

                <div class="form-group">
                    <label for="filphoto">Photo</label>
                    <input required type="file" name="filphoto" id="filphoto" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="txtsize">Size</label>
                    <input required type="name" class="form-control" name="txtsize" id="txtsize" placeholder="Enter Size">
                  </div>

                 <div class="form-group">
                    <label for="txtweight">Weight</label>
                    <input required type="name" class="form-control" name="txtweight" id="txtweight" placeholder="Enter Weight">
                  </div>

                 <div class="form-group">
                        <label for="txtdetails">Details</label>
                        <textarea required class="form-control" id="txtdetails" name="txtdetails" rows="3" placeholder="Enter Details"></textarea>
                 </div>

                  <div class="form-group">

                    <label for="rdoislive">isLive</label>

                    <div class="row mt-1">
                      <div class="col-lg-1">

                        <label class="rdo">Yes
                          <input type="radio" id="rdoislive" checked="checked" name="rdoislive" value="1">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                      <div class="col-lg-11">
                        <label class="rdo">No
                          <input type="radio" id="rdoislive" name="rdoislive" value="0">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                  </div>


                <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

             </form>
          
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
