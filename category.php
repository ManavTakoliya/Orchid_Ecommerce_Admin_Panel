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
              <h2 class="">CATEGORY MANAGEMENT</h2>
            </div>

          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header bg-primary">
              <h3 class="card-title">ADD CATEGORY</h3>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

             <form method="POST" action="submit/add_category.php" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="txtname">Name</label>
                    <input type="name" name="txtname" class="form-control" id="txtname" placeholder="Enter Name" required>
                  </div>

                  <div class="form-group">

                    <div>
                      <label for="filphoto">Photo</label><br>
                      <input type="file" class="form-control" name="filphoto" id="filphoto" required>
                    </div>
                    
                  </div>

                  <div class="form-group">

                    <label for="rdoislive">isLive</label>

                    <div class="row mt-1">
                      <div class="col-lg-1">

                        <label class="rdo">Yes
                          <input type="radio" id="rdoislive" value="1" checked="checked" name="rdoislive">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                      <div class="col-lg-11">
                        <label class="rdo">No
                          <input type="radio" id="rdoislive" value="0" name="rdoislive">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                  </div>

                </div>
                
                <div class="form-group">
                  <input type="submit" name="" value="Add Category" class="btn btn-primary">
                </div>

             </form>

             <?php 

              require_once("inc/message.php");
             ?>
      
           </div>

         </div>

         <div class="row">
           <div class="col-12">
             <div class="card">
               <div class="card-header bg-primary">
                 <h3  class="card-title">Existing Category Details</h3>
               </div>

               <div class="card-body">

                <?php

                  require_once("../inc/connection.php");
                  $sql = "select * from category order by id desc";
                  $result = mysqli_query($link,$sql) or die(mysqli_error($link));

                ?>

                <div class="table-responsive mt-3">
                <table id="myTable" class="table table-bordered">
                <thead>
                    <th width="10%">Sr NO</th>
                    <th width="30%">Name</th>
                    <th width="30%">Photo</th>
                    <th width="20%">isLive</th>
                    <th width="10%">Action</th>
                </thead>

        

                <tbody>

                <?php

                  $count = 1;
                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><a data-fancybox="gallery" href="../images/category/<?php echo $row['photo']?>"><img src="../images/category/<?php echo $row['photo']?>" width="150" height="150"></a></td>
                    <td><?php echo $row['islive'] ?></td>
                    <td>
                      <a href="category_edit.php?id=<?php echo $row['id'] ?>" title="EDIT PRODUCT"><i class="mr-2 fa fa-edit"></i></a>
                      <a href="category_delete.php?id=<?php echo $row['id'] ?>&photo=<?php echo $row['photo']; ?>" title="DELETE PRODUCT"><i class="mr-2 fa fa-trash"></i></a>
                    </td>
                  </tr>

                  <?php 
                    }//end of while
                  ?>

                </tbody>
              </div>
 
               </div>
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
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
            <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
            <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
            <script src="../adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>


            <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
            } );
            </script>
</body>
</html>
