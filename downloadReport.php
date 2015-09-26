<CENTER>
<?php
date_default_timezone_set('America/Los_Angeles');
$currentDate = date('F-d-Y');
$currentTime = date("h:i:sA");
header("Content-type: application/vnd.ms-pdf");
header("Content-Disposition: attachment;Filename=". $currentDate ."_TIME_".$currentTime.".doc");
        
?>



<center><FONT color="#000000" size="5" face="Arial, Helvetica, sans-serif">OFFICIAL RECIEPT</FONT></center>
<div class="date_time">
	<BR><FONT color="#000000" size="2" face="Arial, Helvetica, sans-serif">Date Downloaded: <?php echo $currentDate; ?> </font>
	<BR><FONT color="#000000" size="2" face="Arial, Helvetica, sans-serif">Time Downloaded: <?php echo $currentTime; ?> </font>
   
	<BR>
  <center>  
    <font color='#000000' size='3' face='Arial'>
<table align="center" border="0" cellspacing="1" width="500" >
<tr><td align="right"></tr></td>
</table>
<table align="center" border="0" cellspacing="1" width="500" >
<center></center>


<?php
include('config.php');
$trasactiondate=date("m/d/Y");
$result = mysql_query("SELECT * from myorder WHERE id  ORDER by id DESC limit 1");
while($row = mysql_fetch_array($result)){

echo "<tr><td>" . '</tr></td><p align="center"><font color="red" size="2" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;Date:'. $row['Transactiondate'].'</font></p><br><center>Hope to See You Again at Fresh Dairy Ordering Shop<br>Your Official Reciept
<br><br><b>Expect a phone call After this Transaction</b></center><br>' . "</tr></td><tr><td><br> Name:  "."" . $row['First_Name'] . "&nbsp;&nbsp;&nbsp;" . $row['Last_Name'] . "</tr></td><tr><td><br> City:  " . $row['City'] ."</tr></td><tr><td>
<br> Location:  " . $row['Department']."," . $row['Street']."&nbsp;&nbsp;" . $row['Landmark']."</tr></td><tr><td><br> Your Contact Number:  " . $row['Contact_Number']."</tr></td><tr><td><br> Your Order:  " . $row['OrderedProduct'].
"</tr></td><tr><td><br>Post Message:  " . $row['Message']."</tr></td><tr><td><br>Delivery Time: "."  " . $row['Time_Delivery']."<br> </tr></td><tr><td> Total:  <font color='red' size='7' face='Digital-7'>" . $row['Total']. "  $";
echo '</tr></td><tr><td></font><br></div></div></div></div></form>
        </div> ';
echo'</tr></td>';
}

?>
</table>
