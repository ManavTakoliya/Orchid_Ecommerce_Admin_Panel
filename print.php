<?php require_once("inc/verify_login.php") ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <?php

      require_once("inc/header_part.php");

    ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style media="print">
       @page {
        size: auto;
        margin: 0;
             }


@media print {
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
  }
}
    </style>

</head>

<body class="hold-transition sidebar-mini">
<div id="section-to-print" class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">   
          <div class="card">
              <!-- CARD header -->


              <?php

                require_once("../inc/connection.php");
                $oid = $_REQUEST['oid'];
                $sql = "select b.id, usersid, name, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount , b.mobile from bill b,users u where b.id='$oid'";
                $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                $row = mysqli_fetch_assoc($result);

              ?>
            
               <div class="card-body mt-5">   
                 <div class="row">
                    <div class="col-12">
                      <h4>
                       <img src="../images/logo/logo" width="45" height="45"> Flexicon, Inc.
                        <small class="float-right">Date: <?php echo $row['orderdate']; ?></small>
                     </h4>
                   </div>
                <!-- /.col -->
                  </div>
                  <!-- info row -->
                  <div class="row invoice-info mt-5">
                
                    <div class="col-sm-6 invoice-col">
                      To
                      <address>
                        <strong><?php echo $row['name']; ?></strong><br>
                        <?php echo $row['address']; ?><br>
                        <?php echo $row['city']; ?>, <?php echo $row['state']; ?><br>
                        Phone: (<?php echo $row['mobile']; ?>)
                      </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6 text-right invoice-col">
                      <br>
                      <b>Order ID:</b> <?php echo $row['id']; ?><br>
                      <b>Payment Method : </b><?php echo $row['ordermethod']; ?>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

              <!-- Table row -->
              <div class="row  mt-5">
                <div class="col-12 table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>


              <?php

                $sql1 = "select p.name,c.quantity,c.price from cart c,product p where billid='$oid' and productid=p.id";
                $result1 = mysqli_query($link,$sql1) or die(mysqli_error($link));
                $row1 = mysqli_fetch_assoc($result1);

              ?>


                    <tr>
                      <th>1</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td><?php echo $row1['name']; ?></td>
                      <td><?php echo $row1['price']; ?></td>
                      <td><?php echo $row1['quantity']; ?></td>
                    </tr>
                    <tr>
                      <th colspan="3">Total</th>
                      <?php
                        $grandtotal = $row1['price'] * $row1['quantity'];
                      ?>
                      <td class="text-right"><b><?php echo $grandtotal; ?></b></td>

                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

        
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
      </div><!-- / . card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <?php

    require_once("inc/script.php");

  ?>

<script type="text/javascript"> 
  window.addEventListener("load", window.print());

</script>


</body>
</html>
