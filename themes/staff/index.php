

<?php
session_start();
include("config.php");
include("includes/functions.php");
	
	?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Online Ordering & Mobile System</title>
		<link rel="stylesheet" href="themes/Bootstrap.css">
		<link rel="stylesheet" href="css/jquery.mobile.structure-1.4.0.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		
		
		
	
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.mobile-1.4.0.min.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>Online Ordering & Mobile System</h1>
				<div data-role="navbar">
					<ul>
						<li><a href="#" data-icon="home" class="ui-btn-active">Home</a></li>
						<li><a href="orderproduct.php" rel="external" data-icon="star">ORDER NOW</a></li>
						<li><a href="contact.php" rel="external" data-icon="grid">CONTACT US</a></li>
                        <li><a href="login/order.php" rel="external" data-icon="grid">Login</a></li>
					
						
					</ul>
				</div>
			</div>
			<div data-role="content" data-theme="a">

			
				
				
				
		
		
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

<body>
  <div class="device">
    <a class="arrow-left" href="#"></a> 
    <a class="arrow-right" href="#"></a>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"> <img src="img1/slider1-1.png" width="100%" height="100%"> </div>
        <div class="swiper-slide"> <img src="img1/slider1-2.png" width="100%" height="100%"> </div>
         <div class="swiper-slide"> <img src="img1/slider1-1.png" width="100%" height="100%"> </div>
        <div class="swiper-slide"> <img src="img1/slider1-2.png" width="100%" height="100%"> </div>
        
      </div>
    </div>
    <div class="pagination"></div>
  </div>
  <script src="js/jquery-1.10.1.min.js"></script>
  <script src="js/idangerous.swiper-2.1.min.js"></script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>
</body>
</html>
	<!DOCTYPE html> 
<html> 
    
   
</head> 
<body> 

</body>
</html>	
	
				



				<h2>Welcome To Online & Mobile Order Delivery System For Fresh Dairy Products</h2>
                
                
              <li><a href="login/order.php" data-icon="gear">Login</a></li>			  
                

				<p>
					<div data-role="collapsible">
            <h4 >  <a href="#" data-role="button" data-theme="e">ORDER BY CATEGORY</a> </h4>
			 <h4 >  <a href="butter.php" data-role="button" rel="external">Butter and Fats</a> </h4>
			    <h4 >  <a href="cream.php" data-role="button" rel="external">Ice Cream and Sorbets</a> </h4>
				 <h4 >  <a href="cheese.php" data-role="button" rel="external">Cheese</a> </h4>
			  <h4 >  <a href="yog.php" data-role="button" rel="external">Yoghurt</a> </h4>
			   <h4 > <a href="milk.php" data-role="button" rel="external">Whole Milk</a> </h4>
			 
				
				
                  </div>
			







			</p>
<div data-role="fieldcontain">
    <label for="search-2">Search Input:</label>
    <input type="search" name="search-2" id="search-2" value="" />
</div>
		<form name="form1" action="FUNC3.php">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>		
				
				
			
<div align="center">

	<h1 align="center" data-role="header ></h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
		$Butter=("Butter");
			$result=mysql_query("select * from reyansproduct where category='$Butter'");
			while($row=mysql_fetch_array($result)){
		?>
    	<br />
       
        	<img src="<?php echo $row['picture']; ?>" width="200px"; height="200px;" />
            
             
             <h4 style="font-size:14px">Product:<big style="color:green">
              <?php echo $row['product'];?> <br /><br /></h4></big> 
             
              <h4 style="font-size:14px">Price:<big style="color:green">
              <?php echo $row['product_prize'];?> <br /><br /></h4></big>
               <h4 style="font-size:14px"> Description:<big style="color:green">
                 <?php echo $row['description'];?></big><br /><br /></h4></big>
              <input type="button" class="btn btn-info"  value="BUY ME" onClick="addtocart(<?php echo $row['id']; ?>)" />
			</td>
		
       <td colspan="2"><hr size="1" /></td> 
        <?php } ?>
    </table>
</div>	
				
				
		
		
				
				
				
				
				
			</div>
		</div>
	
</body>
</html>
