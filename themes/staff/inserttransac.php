<?php
if(isset($_POST['add']))	
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
$cus_lname = $_POST['lname'];
$cus_cities = $_POST['cities'];
$cus_total = $_POST['total'];
$cus_dept= $_POST['housenum'];
$cus_street = $_POST['street'];
$cus_cnum = $_POST['cnum'];
$cus_landmark = $_POST['landmark'];
$cus_message= $_POST['message'];
$cus_time= $_POST['time'];
$transactiondate=date("m/d/Y");
$cus_order= $_POST['product'];
$status= $_POST['status'];
$mop= $_POST['mop'];



$sql = "INSERT INTO myorder ".
       "(First_Name,Last_Name, City, Department, Street, Contact_Number, Landmark, OrderedProduct, Message, Total, Time_Delivery, Transactiondate,status,mop) ".
       "VALUES('$cus_fname','$cus_lname','$cus_cities','$cus_dept','$cus_street','$cus_cnum','$cus_landmark','$cus_order','$cus_message','$cus_total','$cus_time','$transactiondate','pending','$mop')";



mysql_select_db('reyansdata');
$retval = mysql_query( $sql, $conn );

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "";
mysql_close($conn);
header("location:reciept.php"); exit(); 
}
else
{

?>


<?php
}
?>