

<?php include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
 ?>




<?php 

include('navbar.php'); 

$login=mysql_query("select * from tb_user")or die(mysql_error());
$row=mysql_fetch_row($login);
$level = $row[3];


session_destroy();
session_start();			
if (isset($_SESSION['username'])){
	if ($level == 1)
		{
			header('location:admin/schedule.php');
		}
						
	if ($level == 2)
		{
			header('location:member/schedule.php');
		}
}

?>

	<body>
    
    
    <div class="row-fluid">
        <div class="span12">


            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->


                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->


                        </div>

                    </div>
                </div>
            </div>
            <div class="hero-unit-header">

            </div>
            <div class="row-fluid">
                <div class="login-center">
                    <div class="span7">
                        <div class="hero-unit-table">
                            <!-- login -->
    
    
    
    

		<div id="container">
			<div id="header">
            
				
			
			<form class="form-horizontal" method="post" > 
			<table>
				<tr>
					<td><label>User Name</label></td>
					<td><input type="text" id="username" name="username" placeholder="username" required></td>
				</tr>
				
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" id="password" name="password" placeholder="Password" required></td>
				</tr>
				
				<tr>
					<td></td>
					<td><button type="submit" id="submit" name="submit" class="btn btn-success" > <i class="icon-signin icon-large"></i>&nbsp;Submit</button></td>
				</tr>
				
			
			</table>
			</form>
			
			<?php
				if (isset($_POST['submit'])){
				$username=$_POST['username'];
				$password=($_POST['password']);
				
				$login=mysql_query("select * from tb_user where username='$username' and password='$password'")or die(mysql_error());
				$count=mysql_num_rows($login);
				while($row = mysql_fetch_array($login))
				{
				//$row=mysql_fetch_row($login);
				$level = $row['user_level'];
				
				
				if ($count > 0){
				
				$_SESSION['username']=$row['username'];
					if ($level == 1)
						{
						   $_SESSION['id']=$row['user_id'];
							header('location:product.php');
						}
						
					if ($level == 2)
						{
						    $_SESSION['id']=$row['user_id'];
							header('location:staff/orders.php');
						}
						
						if ($level == 3)
						{
						    $_SESSION['id']=$row['user_id'];
							header('location:clerk/schedule.php');
						}

				
				
				}
				
				
				else{ ?>
				<script type="text/javascript">
					alert("Error Login! Wrong Combination of Username and Password!");
				</script>
				<!--<div class="alert alert-error">Error login! Please check your username or password</div>
				--><?php
				}}}
				?>
				
				
			</table>
				
		</div>
	
	
	</center>
</div>
</div>

	</body>
  
</html>
