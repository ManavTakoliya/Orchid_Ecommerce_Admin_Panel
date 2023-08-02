
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
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
            <div class="col-lg-6 mt-3 mb-3">
              <h2 class="">PRODUCT MANAGEMENT</h2>
            </div>
          <div class="col-lg-6 mt-3 mb-3">
              <a href="add_product.php"><button type="button" class="btn btn-primary float-right">Add Product</button></a>
            </div>
          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header bg-primary">
              <h3 class="card-title">EXISTING PRODUCT</h3>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

           

              <div class="table-responsive mt-3">
                <table id="myTable" class="table table-bordered">
                <thead>
                    <th width="5%">Sr NO</th>
                    <th width="20%">Name</th>
                    <th width="10%">Category</th>
                    <th width="25%">Photo</th>
                    <th width="10%">Price</th>
                    <th width="5%">Quantity</th>
                    <th width="5%">isLive</th>
                    <th width="20%">Action</th>
                </thead>
                <tbody>

                  <?php 

                    require_once("../inc/connection.php");

                    $count = 1;
                    $sql = "select p.id ,p.name,c.name 'categoryname',p.photo,p.price,p.quantity,p.islive from product p , category c where categoryid=c.id order by p.id desc";
                    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                    while ($row = mysqli_fetch_assoc($result)) {
        
                  ?>

                  <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['categoryname'] ?></td>
                    <td><a data-fancybox="gallery"  href="../images/product/<?php echo $row['photo']?>"><img src="../images/product/<?php echo $row['photo']?>" width="150" height="150"></a></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td><?php echo $row['islive']; ?></td>
                    <td>
                     <a href="produt_edit.php?pid=<?php echo $row['id'] ?>&oldphoto=<?php echo $row['photo'] ?>&catname=<?php echo $row['categoryname'] ?>" title="EDIT PRODUCT"><i class="mr-2 fa fa-edit"></i></a>
                      <a href="product_delete.php?pid=<?php echo $row['id'] ?>&pphoto=<?php echo $row['photo'] ?>" title="DELETE PRODUCT"><i class="mr-2 fa fa-trash"></i></a>
                      <a href="slider.php?pid=<?php echo $row['id'] ?>" title="SLIDER"><i class="mr-2 fa fa-image"></i></a>
                      <a href="product_detail.php?pid=<?php echo $row['id'] ?>" title="PRODUCT DETAIL"><i class="fa fa-eye"></i></a>
                      <a href="offer.php?pid=<?php echo $row['id'] ?>" title="Add Offers"><i class="fa fa-tags ml-2"></i></a>
                    </td>
                  </tr>

                <?php }//end of while ?>

                </tbody>

              </div>

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
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
            <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
              <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

            <script>
              $(document).ready( function () {
                  $('#myTable').DataTable();
              } );
            </script>
</body>
</html>
