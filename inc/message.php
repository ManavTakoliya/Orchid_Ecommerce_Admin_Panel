<?php 
if(isset($_REQUEST['msg'])==true)
{   
?>

	<div id="snackbar"><?php echo $_REQUEST['msg']; ?></div>

<?php } //end of if ?>