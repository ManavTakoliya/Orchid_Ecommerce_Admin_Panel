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

</head>

<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">
  <?php require_once("inc/menu.php") ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-4 mt-3 mb-3">
              <h2 class="text-center">CATEGORY MANAGEMENT</h2>
            </div>

          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header bg-primary">
              <h3 class="card-title">EDIT CATEGORY</h3>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">


              <?php

                  require_once("../inc/connection.php");
                  $id = $_REQUEST['id'];
                  $sql = "select * from category where id =$id";
                  $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                  $row = mysqli_fetch_assoc($result);
              ?>

             <form method="POST" action="submit/update_category.php" enctype="multipart/form-data">

                <div class="card-body">

                  <div class="form-group">
                    <label for="txtname">Name</label>
                    <input type="name" name="txtname" class="form-control" id="txtname" placeholder="Enter Name" value="<?php echo $row['name'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="filphoto">Photo</label>
                    <input type="file" class="form-control" name="filphoto" id="filphoto">
                  </div>

                  <div>

                    <input type="hidden" name="catid" id="catid" value=<?php echo $row['id'] ?> >
                    <input type="hidden" name="oldphoto" id="oldphoto" value=<?php echo $row[photo]; ?> >
                  </div>

                  <div>
                    <a data-fancybox="gallery" href="../images/category/<?php echo $row['photo']?>"><img src="../images/category/<?php echo $row['photo']?>" width="200" height="200"></a>
                  </div>

                  <div class="form-group">

                    <label for="rdoislive">isLive</label>

                    <div class="row mt-1">
                      <div class="col-lg-1">

                        <?php

                        $yes = "checked=checked";
                        $no = null;

                        if($row['islive']==0)
                        {
                          $no = "checked=checked";
                          $yes = null;
                        }

                        ?>

                        <label class="rdo">Yes
                          <input type="radio" id="rdoislive" value="1" <?php echo $yes; ?> name="rdoislive"  >
                          <span class="checkmark"></span>
                        </label>
                      </div>

                      <div class="col-lg-11">
                        <label class="rdo">No
                          <input type="radio" id="rdoislive" value="0" <?php echo $no; ?>   name="rdoislive">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                    </div>

                  </div>

                </div>

             
                  <button type="submit" class="btn btn-primary ml-3">Submit</button>
               

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
