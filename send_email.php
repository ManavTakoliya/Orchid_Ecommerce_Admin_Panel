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
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">


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

           <!-- CARD BODY -->
           <div class="card-body">

            <form role="form" method="POST" action="submit/send_email.php">

              <?php

                $email = $_REQUEST['email']; 

              ?>

              <div class="form-group" >
                <label for="txtemail">Email Address</label>
                <input type="email" class="form-control" readonly="readonly" name="txtemail" id="txtemail" value="<?php echo $email; ?>" placeholder="Email Address">
              </div>

               <div class="form-group" >
                <label for="txtsubject">Subject</label>
                <input type="text" class="form-control" name="txtsubject" id="txtsubject" placeholder="Subject">
              </div>

              <div>
                <textarea name="txtcontent" id="summernote">Enter Content*</textarea>
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
			
			<!-- include libraries(jQuery, bootstrap) -->
		
			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			<!-- include summernote css/js -->
			
			<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

         
          <script>

              $(document).ready(function() {
              $('#summernote').summernote();
            });
          </script>



</body>
</html>
