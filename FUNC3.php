
<?PHP
session_start();
	include("includes/functions.php");	
if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){ 
	$pid=$_REQUEST['productid']; addtocart($pid,1); 
	header("location:ordercart.php"); exit(); } 
    ?>