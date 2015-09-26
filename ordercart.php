<?php
error_reporting(0);
session_start();
	include("config.php");
	include("includes/functions.php");
	
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Order& Delivery System For Fresh Dairy</title>




<script type="text/javascript">
function validateForm()
{


if (document.abcd.checkbox.checked == false)
{
alert ('pls. agree the term and condition of this company');
return false;
}
else
{
return true;
}
}
</script>
<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


</script>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style31.css" type="text/css" media="all" />

<link rel="stylesheet" href="themes/Bootstrap.css">
		
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />

<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<link rel="shortcut icon" href="img/icon.png" />




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
		 <a href="orderproduct.php"   rel="external", data-ajax="false" or target data-icon="delete">BACK</a>
		
	<h5> Online Order& Delivery System For Fresh Dairy</h5>
        </div>







<div class="shell">
 
   
      <div class="cl">&nbsp;</div>
    </div>
    <div id="navigation">
      <ul>
    
     </ul>
      <div class="cl">&nbsp;</div>
    </div>
      

<div class="slider">
      <font color="#000000" face="Arial, Helvetica, sans-serif" size="3">
	  
<p align="justify" >&nbsp;</p>
  <form name="form1" method="post" action="func.php">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Your Orders </h1>
    <input type="button" class="btn btn-info" value="ADD ANOTHER ORDER" onClick="window.location='orderproduct.php'"  class="table-condensed"/>
    </div>
    	<div style="color:#F00"></div>
    	
		<table  align="center" border="0" class="table-condensed"  cellpadding="13px" cellspacing="1px" style="font-family:Arial; font-size:16px; >
    	
		<?php
			if(is_array($_SESSION['cart'])){
            	echo '<tr class="table-condensed" style="font-weight:bold"><td>Product</td><td>Name</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];

					$pname=get_product_name($pid);
					$pic=get_pic($pid);
					if($q==0) continue;
			?>
              
            		<tr bgcolor="transparent"><td><img src="<?php  echo $pic;?>" width="100" height="100"></td><td><?php echo $pname;?></td>
                    <td>$<?php echo get_price($pid)?></td>
                    <td><input type="text" class="input-mini" name="product<?php echo $pid;?>" value="<?php echo $q;?>" maxlength="3" size="2" /></td>                    
                    <td>$ <?php echo  get_price($pid)*$q;?></td>
                    <td><a href="javascript:del(<?php echo $pid;?>)">Remove</a></td></tr>
            <?php					
				}
			?>
				<tr><td><b>Order Total: <FONT size="6" color="green">$<?php echo get_order_total();?></FONT></b></td><td colspan="5" align="right"><input class="btn btn-primary btn-medium" type="button" value="Clear Cart" onClick="clear_cart()"><input type="button"  class="btn btn-info btn-medium"value="Compute Total" onClick="update_cart()"></td></tr>
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
                
    </div>
    </form>
	
    
 
     <form  method="post"  action="inserttransac.php" data-ajax="false" rel="external", data-ajax="false" >
   <?php
   
			if(is_array($_SESSION['cart'])){
      
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];

					$pname=get_product_name($pid);
					if($q==0) continue;
					
					
			?>
            

 <input type="hidden" name="product" value="<?=$pname?> x <?=$q?>">
 
 
 <?php			
 		
				}
			}
			
			
			?>
          
    <input type="hidden" name="total" value="<?php echo get_order_total();?>">
      <tr></tr></td><center><font color="black" face="CenturY Gothic" size="3" >YOUR INFORMATION <br>( (*) mark must be required to fill up )
        
         
       
       
    
 
        
			 
			 

    </table>
    <a href="login/order.php" rel="external"  data-role="button" >Login</a>   
<a href="login/_signup.php" rel="external" data-role="button">Create An Account</a>
</main>
</td>
</form>
    
    

 <!--end main -->
 <div id="main">
      <div id="content" class="left">
        <div class="highlight">
         
      <div class="cl">&nbsp;</div>
    </div>
    <div class="shadow-l"></div>
    <div class="shadow-r"></div>
    <div class="shadow-b"></div>
  </div>
  <div id="footer">
   
  </div>
</div>

</body>
</html>