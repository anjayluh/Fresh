<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Ordering & Mobile System</title>
<script type="text/javascript">
setTimeout(function(){
  window.location = "sendingprocess.php";
}, 3000);
</script>
</head>

<body>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<center>
  <p><font color="#000000" size="5">  Sending...</font></p>
  <br /><img src="img/sendingprocess.gif" />
  
  <p>&nbsp;</p>
</center>

</body>
</html>
<?php
if(isset($_POST['post']))	
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$cus_fname = $_POST['fname'];
$cus_msg = $_POST['msg'];
$cus_id = $_POST['ids'];
$cus_email=$_POST['email'];




$sql = "INSERT INTO comments ".
       "(comments,msg_id_fk,firstname,emailaddress) ".
       "VALUES('$cus_msg','$cus_id','$cus_fname','$cus_email')";



mysql_select_db('reyansdata');
$retval = mysql_query( $sql, $conn );

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "";
mysql_close($conn);
}
else
{
}
?>
