<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Reciept</title>
<link href="style.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href="img/icon.png" />
<script type="text/javascript" src="lib/jquery.js"></script>
 <script src="src/facebox.js" type="text/javascript"></script>
 
 
 
 
<link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" type="text/css" />
        <link rel="stylesheet" href="css/my.css" type="text/css"/>
        <script src="javascript/jquery.min.js">
        </script>
        <script src="javascript/jquery.mobile-1.2.0.min.js">
        </script>
 
 
 
 
 

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		else if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>
<body>

<div data-role="page" id="localiza">
        <div data-role="header">
		 <a href="ordercart1.php" "external", rel="external", data-ajax="false" or target data-icon="delete">BACK</a>
		
		<h5> Online Order& Delivery System For Fresh Dairy</h5>
        </div>




<font color='#000000' size='3' face='Arial'>
<table align="center" border="0" cellspacing="1" width="500" >

</table>
<table align="center" border="0" cellspacing="1" width="500" >
<center><img src="img/reciept.png"></center>



<?php
include('config.php');
$transactiondate=date("m/d/Y");
$result = mysql_query("SELECT * from myorder WHERE id  ORDER by id DESC limit 1");
while($row = mysql_fetch_array($result)){

echo "<tr><td>" . '</tr></td><p align="center"><font color="red" size="2" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;Date:'. $row['Transactiondate'].'</font></p><br><center>Hope to See You Again at Online Fresh Dairy Products Shop<br>Your Official Reciept
<br><br><b>Expect a Phone Call After This Transaction</b></center><br> <center><font size="2"> <b>If you have any concern, <a rel="facebox" href=ordermessage.php?  data-theme="a" ><b>Send Us a Message <img src="img/images.png" width="30px"; height="30px"> </b></a> 
</font></center>' . "</tr></td><tr><td><br> Name:  "."" . $row['First_Name'] . "&nbsp;&nbsp;&nbsp;" . $row['Last_Name'] . "</tr></td><tr><td><br> Province:  " . $row['City'] ."</tr></td><tr><td>
<br> Location:  " . $row['Department']."," . $row['Street']."&nbsp;&nbsp;" . $row['Landmark']."</tr></td><tr><td><br> Your Contact Number:  " . $row['Contact_Number']."</tr></td><tr><td><br> Your Order:  " . $row['OrderedProduct'].
"</tr></td><tr><td><br>Post Message:  " . $row['Message']."</tr></td><tr><td><br>Delivery Time: "."&nbsp;&nbsp;&nbsp" . $row['Time_Delivery']."</tr></td><tr><td> Total:  <font color='red' size='7' face='Digital-7'>" . $row['Total']. "  $";
echo '</tr></td><tr><td></font><br></div></div></div></div></form>
        </div> ';
echo'
<a href="downloadReport.php" data-ajax="false" rel="external", data-ajax="false">Download My Reciept</a></tr></td>';


}


?>




