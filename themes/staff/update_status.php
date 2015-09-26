<?php
include('connect.php');


$get_id=$_GET['id'];

mysql_query("update myorder set status='Delivered' where id='$get_id'")or die(mysql_error());
header('location:orders.php');

?>