<?php require_once("inc/verify_login.php") ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php require_once("inc/header_part.php");?>  

</head>

<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">
  <?php require_once("inc/menu.php") ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-4 mt-3 mb-3">
              <h2 class=" text-center bg-white">Message In App</h2>
            </div>
          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header">
              <h3 class="card-title"></h3>
               <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
               </div>
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

            <form role="form">

              <div class="form-group">
                <label for="txttitle">Title</label>
                <input type="text" class="form-control" id="txttitle" name="txttitle" placeholder="Title">
              </div>

              <div class="form-group">
                <label for="txtcontent">Content</label>
                <textarea class="form-control" name="txtcontent" id="txtcontent" placeholder="Content"></textarea>
              </div>

               <div class="form-group">
                  <a href=""><button type="button" class="btn btn-primary ">Send Message</button></a>
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
