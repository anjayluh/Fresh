<?php
session_start();
include("config.php");
include("includes/functions.php");
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Online Ordering & Mobile System</title>

<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
        </title>
        <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" type="text/css" />
        <link rel="stylesheet" href="css/my.css" type="text/css"/>
        <script src="javascript/jquery.min.js">
        </script>
        <script src="javascript/jquery.mobile-1.2.0.min.js">
        </script>
		




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap1.css" type="text/css" media="all" />
<title>Online Ordering & Mobile System</title>
<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>






</head>

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<body>
<form name="form1" action="FUNC3.php">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>




<div data-role="page" id="localiza">
        <div data-role="header">
		 <a href="index.php"  data-ajax="false" rel="external", data-ajax="false" or target data-icon="delete">HOME</a>
		
		<h5> ONLINE ORDERING & MOBILE SYSTEM</h5>
        </div>



<div align="center">

	<h1 align="center" data-role="header ></h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
		$avail=("available");
			$result=mysql_query("select * from reyansproduct where status='$avail'");
			while($row=mysql_fetch_array($result)){
		?>
    	<br />
       
        	<td><img src="<?php echo $row['picture']; ?>" /></td><td>
             <b><?php echo $row['product']; ?></b><br />
              Price:<big style="color:green">
              $<?php echo $row['product_prize'];?></big><br /><br />
              <input type="button" class="btn btn-info"  value="BUY ME" onclick="addtocart(<?php echo $row['id']; ?>)" />
			</td>
		
       <td colspan="2"><hr size="1" /></td> 
        <?php } ?>
    </table>
</div>

</body>
</html>
