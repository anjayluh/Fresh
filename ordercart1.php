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



<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<link rel="shortcut icon" href="img/icon.png" />




 <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" type="text/css" />
        <link rel="stylesheet" href="css/my.css" type="text/css"/>
        <script src="javascript/jquery.min.js">
        </script>
        <script src="javascript/jquery.mobile-1.2.0.min.js">
        </script>
<link rel="stylesheet" href="themes/Bootstrap.css">
		
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />









</head>
<body>


<div data-role="page" id="localiza">
        <div data-role="header">
		 <a href="index.php"   rel="external", data-ajax="false" or target data-icon="delete">HOME</a>
		
		<h5> Online Order& Delivery System For Fresh Dairy</h5>
        </div>



<table>
 <tr>
	<span class="style13"><font color="#9999FF" size="2">Welcome: </font> </span><font color="#000000">|</font> <span class="style17 style14 style24"><?php echo("<font color='green'>".$_SESSION['ename']."</font>"); ?></span><span class="style13"> <font color="#000000">|</font></span> <a href="logout.php"  data-role="button" rel="external">Logout</font></a></div></td>
	</tr></table>


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
  <form name="form1" method="post" action="func1.php">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Your Orders </h1>
    <input type="button" class="btn btn-info" value="ADD ANOTHER ORDER" onClick="window.location='orderproduct.php'"  class="table-condensed"/>
    </div>
    	<div style="color:#F00"></div>
    	
		<table  align="center" border="0" class="table-condensed"  cellpadding="13px" cellspacing="1px" style="font-family:Arial; font-size:16px;>
    	
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
                </table>
   
    </form>
	

    
    
 <div style="width:1000px; margin-right:auto; margin-left:auto;align:center; ">
    
     <form  method="post"  action="inserttransac.php" width="100" height="100"  style="width:20%; text-align:center; position: inherit;">
     
     
     
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
        <br> <br></tr></td><tr><td>*Name:</td><td>    <input name="fname" type="text" placeholder="Text please" required="required" value="<?php echo($_SESSION['ename']); ?>"/>
       
        
        
        
        
        
        
       
        <br></tr></td><tr><td>*States:						</td><td><select name="cities"  class="input-large" required="required">
  <option value="Kampala City"></option>
  <option value="Ntinda">Ntinda</option>
  <option value="Mengo">Mengo</option>
   <option value="Makerere">Makerere</option>
    <option value="Bukooto">Bukoto</option>
    <option value="Nakawa">Nakawa</option>
  <option value="Nakasero" >Nakasero</option>
</select>

<br>
   <div class="control-group">
                                    <label class="control-label" for="inputPassword">Payement Method:</label>
                                    <div class="controls">
                                        <select type="text" name="mop"  placeholder="mode of payement" >
                                             <option>Cash On Deliverly</option>
                                            <option>Visa</option>
											    
                                            
                                        </select>
                                    </div>
                                </div>
			









     	<br></tr></td><tr><td>Plot No:		</td><td><input type="text" name="housenum" size="" class="input-large"/>
        
       
        <br></tr></td><tr><td>*Contact Number:				</td><td><input type="text" name="cnum"  required="required" class="input-large"/>
         <br></tr></td><tr><td>* Delivery Time:						</td><td><select name="time"  required="required" class="input-large">
  <option value="7:00am">7:00am</option>
  <option value="8:00am">8:00am</option>
  <option value="9:00am">9:00am</option>
   <option value="10:00am">10:00am</option>
   <option value="11:00am">11:00am</option>
   <option value="12:00pm">12:00pm</option>
  <option value="1:00pm" >1:00pm</option>
  <option value="2:00pm" >2:00pm</option>
  <option value="3:00pm" >3:00pm</option>
  <option value="4:00pm" >4:00pm</option>
  <option value="5:00pm" >5:00pm</option>
  <option value="6:00pm" >6:00pm</option>
  <option value="7:00pm" >7:00pm</option>
  <option value="8:00pm" >8:00pm</option>
  <option value="9:00pm" >9:00pm</option>
  <option value="10:00pm" >10:00pm</option>
  <option value="11:00pm" >11:00pm</option>
  <option value="12:00am" >12:00am</option>
  <option value="1:00am" >1:00am</option>
  <option value="2:00am" >2:00am</option>
  <option value="3:00am" >3:00am</option>
  <option value="4:00am" >4:00am</option>
  <option value="5:00am" >5:00am</option>
  <option value="6:00am" >6:00am</option>
</select>
<br></tr></td><tr><td>Message:						</td><td><textarea name="message" height="200" style="height: 80px; margin: 2px;" width="50">
</textarea>

         
             

			 
			
			 <INPUT TYPE=submit  value="CONFIRM ORDER" name="add" class="btn btn-primary" > </tr>
			 
			 
			 
			
			 
			 
			</div> 
			 

    </table>
</main>
</td>
</form>
    
    


</body>
</html>