<?php require_once("inc/verify_login.php") ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

  <?php
    require_once("inc/header_part.php");
  ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
  <?php 
      require_once("inc/menu.php");
  ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Order Management</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Existing Orders</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responseive">
                <table id="myTable" class="table table-striped table-bordered table-hover" width="100%">
                   <thead>
                   <tr>
                        <td width="5%">Sr No</td>
                        <td>Fullname </td>
                        <td width="15%">Order Date</td>
                        <td width="15%">Amount </td>
                        <td width="15%">Order Status</td>
                        <td width="10%">Actions</td>
                    </tr>
                   </thead>
                   <tbody>

                    <?php

                      require_once("../inc/connection.php");

                      $sql = "select id,name,city,pincode,state,orderdate,amount,orderstatus from bill order by id desc";
                      $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                      $count = 1;
                      while($row = mysqli_fetch_assoc($result)){                      

                    ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['name']; ?> <br/>
                                <?php echo $row['city']; ?> - <?php echo $row['state']; ?> </td>
                            <td><?php echo $row['orderdate']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                            <td><?php echo $row['orderstatus']; ?></td>
                            <td align=center>
                                <a href="order_process.php?oid=<?php echo $row['id']; ?>" title="process order">
                                <i class="far fa-file-alt fa-2x"></i>
                                </a>
                            </td>
                        </tr>

                        <?php
                          }//end of while
                        ?>

                   </tbody>
                </table>
            </div>

            <?php

              require_once("inc/message.php");

            ?>
          </div> 
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->
 <?php require_once("inc/script.php"); ?>

               <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
               <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
               <script>
                  $(document).ready( function () {
                      $('#myTable').DataTable();
                  } );
               </script>
</body>
</html>     