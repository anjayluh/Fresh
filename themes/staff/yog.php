
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
		

<div data-role="page" id="localiza">
        <div data-role="header">
		 <a href="index.php"  data-ajax="false" rel="external", data-ajax="false" or target data-icon="delete">HOME</a>
		
		<h5 > ONLINE ORDERING & MOBILE SYSTEM</h5>
   
				
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
				
				
				
				

				

				<p>
					
        <a href="#" data-role="button" data-theme="d">Yoghurt Products </a> 
			 
              
				</p>

		<form name="form1" action="FUNC3.php">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>		
				
				
			
<div align="center">

	<h1 align="center" data-role="header ></h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
		$Yoghurt=("Yoghurt");
			$result=mysql_query("select * from reyansproduct where category='$Yoghurt'");
			while($row=mysql_fetch_array($result)){
		?>
    	<br />
       
        	<img src="<?php echo $row['picture']; ?>" width="200px"; height="200px;" />
            
             
             <h4 style="font-size:14px">Product:<big style="color:green">
              <?php echo $row['product'];?> <br /><br /></h4></big> 
             
              <h4 style="font-size:14px">Price:<big style="color:green">
              $<?php echo $row['product_prize'];?> <br /><br /></h4></big>
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
