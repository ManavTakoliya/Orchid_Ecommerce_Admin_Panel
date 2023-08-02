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
              <h2 class="">USER MANAGEMENT</h2>
            </div>

            <div class="col-lg-6 mt-3 mb-3">
              <a  href="compose_mail.php?regid=-1" class="btn btn-danger float-right text-white">Send Message To All</a>
            </div>

          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header">
              <h3 class="card-title">All Users</h3>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

            <div class="table-responsive">
            <table id="myTable" class="table table-striped table-bordered">
            <thead>
            <th width="5%">Sr NO</th>
            <th width="25%">Email</th>
            <th width="15%">Action</th>
            </thead>
            <tbody>

              <?php

                require_once("../inc/connection.php");
                $count = 1;
                $sql = "select email,regid from users order by id desc";
                $result = mysqli_query($link,$sql) or die(mysqli_error($link));

                while ($row = mysqli_fetch_assoc($result)) {

              ?>

              <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                  <a><i class="fa fa-"></i></a>
                  <a title="Email Message" href="send_email.php?email=<?php echo $row['email']; ?>"><i class="fas fa-envelope fa-2x"></i></a>
                  <a title="App Message" href="compose_mail.php?regid=<?php echo $row['regid']; ?>"><i class="fas fa-mobile ml-3 fa-2x"></i></a>
                </td>
              </tr>

              <?php

                }//end of while

              ?>

            </tbody>
            </div>
          
           </div>

           <?php 

            require_once("inc/message.php");

            ?>

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

            <script>
              $(document).ready( function () {
                  $('#myTable').DataTable();
              } );
            </script>
</body>
</html>
