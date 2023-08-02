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
	<link rel="stylesheet" href="css/style.css"/>


</head>

<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">
  <?php require_once("inc/menu.php") ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-4 mt-3 mb-3">
              <h3 class="">CUSTOMER MANAGEMENT</h3>
            </div>
          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header ">
              <h4 class="card-title">SEND MESSAGE</h4>
         
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

            <form role="form" method="POST" action="submit/send_message.php">

              <div class="form-group">
                <label for="txttitle">Title</label>
                <input type="text" class="form-control" name="txttitle" id="txttitle" placeholder="Title*" required>
              </div>

              <div class="form-group">
                <label for="txtcontent">Content</label>
                <textarea type="text" class="form-control" name="txtcontent" id="txtcontent" required>Enter Content*</textarea>
              </div>

              <div>
                <input type="hidden" name="regid" value="<?php echo $_REQUEST['regid'];  ?>">
              </div>

              <div>
              <button type="submit" class="btn btn-danger">Send Message</button>
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
