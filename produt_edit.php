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
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> 


</head>

<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">
  <?php require_once("inc/menu.php") ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-6 mt-3 mb-3">
              <h2 class="">PRODUCT MANAGEMENT</h2>
            </div>

          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header bg-primary">
              <h3 class="card-title">Edit Product</h3>
     
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

             <form action="submit/update_product.php" method="POST" enctype="multipart/form-data">

              <?php

                require_once("../inc/connection.php");
                $pid = $_REQUEST['pid'];
                $oldphoto = $_REQUEST['oldphoto'];
                $catname = $_REQUEST['catname'];

                $sql = "SELECT name, price, quantity, size, weight, details, categoryid, photo, islive FROM product WHERE id='$pid'";
                $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                $row = mysqli_fetch_assoc($result);

              ?>

                  <div class="form-group">
                    <label for="txtname">Name</label>
                    <input type="name" name="txtname" class="form-control" id="txtname" value="<?php echo $row['name']; ?>">
                  </div>

                   <div>
                    <label for="sltcategoryid">Select Category</label>
                    <select required id="sltcategoryid" class="form-control" name="sltcategoryid">
                      
                  <option value=""><?php echo $catname; ?></option>

                 <?php
                    require_once("../inc/connection.php");
                    $sql = "select id,name from category order by id desc";
                    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                    while ($row1 = mysqli_fetch_assoc($result))
                     {
                  ?>
                      <option value=<?php echo $row1['id']; ?>><?php echo $row1['name']; ?></option>

                    <?php

                     } // end of while 

                    ?>
                    </select>

                  </div>

                  <div class="form-group mt-2">
                    <label for="txtprice">Price</label>
                    <input type="number" name="txtprice" class="form-control" id="txtprice" value="<?php echo $row['price']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="txtquantity">Quantity</label>
                    <input type="number" class="form-control" name="txtquantity" id="txtquantity" placeholder="Enter Quantity" value="<?php echo $row['quantity']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="filphoto">Photo</label>
                    <input type="file" name="filphoto" id="filphoto" class="form-control">
                  </div>

                  <div>
                    <a data-fancybox="gallery" href="../images/product/<?php echo $oldphoto; ?>"><img src="../images/product/<?php echo $oldphoto; ?>" width="200" height="200"></a>
                  </div>

                  <div>
                    <input type="hidden" name="oldphoto" value="<?php echo $oldphoto; ?>">
                  </div>

                  <div>
                    <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                  </div>

                  <div class="form-group">
                    <label for="txtsize">Size</label>
                    <input type="name" class="form-control" name="txtsize" id="txtsize" value="<?php echo $row['size']; ?>" placeholder="Enter Size">
                  </div>

                 <div class="form-group">
                    <label for="txtweight">Weight</label>
                    <input type="name" class="form-control" name="txtweight" id="txtweight" placeholder="Enter Weight" value="<?php echo $row['weight']; ?>">
                  </div>

                 <div class="form-group">
                        <label for="txtdetails">Details</label>
                        <textarea class="form-control" id="txtdetails"  name="txtdetails" rows="3"><?php echo $row['details']; ?></textarea>
                 </div>

                  <div class="form-group">

                  <label for="rdoislive">isLive</label>

                  <?php

                    $yes = "checked=checked";
                    $no = null;

                    if($row['islive']==0)
                    {
                      $yes = null;
                      $no = "checked=checked";
                    }

                  ?>

                    <div class="row mt-1">
                      <div class="col-lg-1">

                        <label class="rdo">Yes
                          <input type="radio" id="rdoislive" value="1" <?php echo $yes; ?> name="rdoislive">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                      <div class="col-lg-11">
                        <label class="rdo">No
                          <input type="radio" id="rdoislive" name="rdoislive" value="0"<?php echo $no; ?> >
                          <span class="checkmark"></span>
                        </label>
                      </div>

                    </div>

                  </div>

                <div>
                  <button type="submit" class="mt-2 btn btn-primary">Submit</button>
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
             <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>
