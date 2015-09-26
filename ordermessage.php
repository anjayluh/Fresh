<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>







<link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" type="text/css" />
        <link rel="stylesheet" href="css/my.css" type="text/css"/>
        <script src="javascript/jquery.min.js">
        </script>
        <script src="javascript/jquery.mobile-1.2.0.min.js">
        </script>




</head>

<body>

<div data-role="page" id="localiza">
        <div data-role="header">
		 <a href="index.php"  data-ajax="false" rel="external", data-ajax="false" or target data-icon="delete">HOME</a>
		
		<h5> ONLINE ORDERING & MOBILE SYSTEM</h5>
        </div>





<font face="Arial, Helvetica, sans-serif">

<form method="post" action="messagesent.php" rel="external", data-ajax="false" or target data-icon="delete>
<input type="hidden" name="ids" value="1" />


<h3>Contact Form</h3>
					<?php
					include('config.php');
					$result = mysql_query("SELECT * FROM address");
					while($row = mysql_fetch_array($result))
						{
							echo $row['address'];
						}
					?>


<br><br><br>

 <font color="#CC0000" size="3" ><b>NOTE <br></font>
	You Can Send Us Your Feedback 
    <br />Note:  Cancellation of Orders will be ignore. If you have concerns with your orders please call us.
<table width="100%" text_align="center">
<td width="100%"><div align="left">Your Full Name:<br /> <input type="text" name="fname"  class="span5" value=""></div></td>
<font face="century gothic" size="3">
  <br />
  <tr><td></td></tr>
  <tr><td> Email Address </td></tr>     	  
  <tr><td><input type="email" name="email" value=""  class="span5" required="required"/></td></tr>
  <br />
  <tr><td></td></tr>
 <tr><td> Your Message</td></tr>
  	<tr><td><textarea name="msg" size="300"  class=" span6 uneditable-textarea"   required="required"></textarea></td></tr>
  </p>
  <p>
    <tr><td><button type="submit" class="btn btn-primary " value="Send" name="post">Submit</button>
	
	<li><a href="reciept.php" data-icon="gear" data-role="button" rel="external">Back</a></li>



	
	
  </p>
    </form>
</table>



</body>
</html>