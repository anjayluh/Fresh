<?php
session_start();
include("config.php");
include("header2.php");
include("includes/functions.php");
	
	?>



		






<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>



</head>


<body>
<form name="form1" action="FUNC3.php">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>











<div align="center">

	<h1 align="center" data-role="header ></h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
		$avail=("available");
			$result=mysql_query("select * from reyansproduct where status='$avail'");
			while($row=mysql_fetch_array($result)){
		?>
    	<br />
       
        	<img src="<?php echo $row['picture']; ?>" width="200px"; height="200px;" />
            
             
              <h4 style="font-size:14px">product:<big style="color:green">
              <?php echo $row['product'];?> <br /><br /></h4></big>
             
              <h4 style="font-size:14px">Price:<big style="color:green">
              $<?php echo $row['product_prize'];?> <br /><br /></h4></big>
              
              
               <h4 style="font-size:14px">category:<big style="color:green">
              <?php echo $row['category'];?> <br /><br /></h4></big>
              
              
               <h4 style="font-size:14px">Quantity:<big style="color:green">
              <?php echo $row['quantity'];?> <br /><br /></h4></big>
               <h4 style="font-size:14px"> Description:<big style="color:green">
                 <?php echo $row['description'];?></big><br /><br /></h4></big>
              <input type="button" class="btn btn-info"  value="Add To Cart" onClick="addtocart(<?php echo $row['id']; ?>)" />
			</td>
		
       <td colspan="2"><hr size="1" /></td> 
        <?php } ?>
    </table>
</div>

</body>
</html>
