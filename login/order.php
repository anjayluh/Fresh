


<?php
			require_once('header.php');
			
				
			?>




<?php
				
				if ( isset($_POST['login']) ){
				session_start();
				$con=mysql_connect("localhost", "root", "")or die("cannot connect");
				mysql_select_db("reyansdata",$con)or die("cannot select DB");
				$username=$_POST['user'];
				$password=$_POST['pass'];
				
				$sql="SELECT * FROM users WHERE userName='$username' AND password='$password'";
				
				$result=mysql_query($sql,$con);
				if(mysql_num_rows($result) ==1){
				$row=mysql_fetch_array($result);
				$row['eType'];
				
				if($row['eType']=='Administrator'){
				$_SESSION['auth_password']=$password;
				$_SESSION['auth_username']=$username;
				$_SESSION['login_check']=$row['eName'];
				$_SESSION['id']=$row['id'];
				
				echo"<meta http-equiv=\"refresh\"content=\"0;URL=Welcome.php\">";
				}
				else if($row['eType']=='Customer')
				{
				$_SESSION['auth_password']=$password;
				$_SESSION['auth_username']=$username;
				$_SESSION['ename']=$row['eName'];
				$_SESSION['id']=$row['id'];

                echo"<meta http-equiv=\"refresh\"content=\"0;URL=../ordercart1.php\">";
				}
				else if($row['eType']=='Seller')
				{
				$_SESSION['auth_password']=$password;
				$_SESSION['auth_username']=$username;
				$_SESSION['ename']=$row['eName'];
				$_SESSION['id']=$row['id'];

                echo"<meta http-equiv=\"refresh\"content=\"0;URL=Welcome.php\">";
				}
				else if($row['eType']=='Registrar')
				{
				$_SESSION['auth_password']=$password;
				$_SESSION['auth_username']=$username;
				$_SESSION['ename']=$row['eName'];
				$_SESSION['id']=$row['id'];

                echo"<meta http-equiv=\"refresh\"content=\"0;URL=Welcome.php\">";
				}
				}					
			else
				{
				
				$errorMessage = "Wrong login details!!";
				}
			}
			
			//session_destroy();
				
				?>


        
		<body>
        <table align="center" width="50%">
        <tr><td>
        
        	  <form action="" method="post" name="form1" id="form1" data-ajax="false" >
       

    Limited to only Registered users </span>
     <br>    <br>    <br>
          Username:</div>
          
                <input name="user" type="text" value=""   class="FormItemTextbox" />
       
        
          Password:
          
                <input name="pass" type="password" value=""   class="FormItemTextbox" />
            
         
           
                <input name="login" type="submit" id="login"  value=" login  " />
            
         
           <a href="_signup.php" rel="external" >Create Account:<br>It's Free </a>
          
      
	  
	
	  </form>
	  </div>
         </tr></td></table
         >
    
    
 
  


</body>
</html>
