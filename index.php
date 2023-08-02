<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

               

<!------ Include the above in your HEAD tag ---------->
</head>
<body>



<div class="container login-container">
            <div class="row">
                <div class="col-md-12 login-form-1">
                    <h3>Login for Form 1</h3>
                    <form role="form" method="POST" action="submit/verifyAdmin.php">
                        <div class="form-group">
                            <input type="text" id="txtemail" name="txtemail" class="form-control" placeholder="Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" id="txtpassword" name="txtpassword" class="form-control" placeholder="Your Password *" value="" required/>
                        </div>
                        <div >
                            <button type="submit" class="btnSubmit">Login</button>
                        </div>

                    </form>

                </div>

            </div>

                    <?php

                    require_once("inc/message.php");
                    require_once("inc/script.php");

                    ?>
        </div>

</body>
</html>