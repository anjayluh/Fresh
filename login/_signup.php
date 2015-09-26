<?php
session_start();
session_regenerate_id();
?>
<?php

require 'header.php';

?>
<script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
	});
	$(function() {
		$('#datepicker').datepicker();
	});
	</script>
   
 
<title>Signup</title>
</head>

<body>


<table width="20%" align="right">

<td >
<a href="order.php" rel="external" data-role="button" data-theme="b">Login</a>


</td >
</tr>
</table>

<table width="50%" align="center">



                <tr><td >
<h2 align="center"> Sign up Here  </h2>

	
	 
               
                <br>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo "<ul>";
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li><img src="images/icons/icn_alert_info.png">  <font color="red">',$msg ,'</font></li>'; 
		}
		echo "</ul>";
		unset($_SESSION['ERRMSG_ARR']);
	}
?>

<form action="_save_user.php" method="post" name="register" id="register" style="width:100%;" align="center" data-ajax="false">

<label for="eName"> Full names:</label><br />
<input name="eName" type="text"   title="your names" required id="eName" class="normaltip" placeholder='sam' autocomplete="off" /><br />
<label > UserName:<br /> </label><br />
<input name="userName" type="text" title="your registration number" required id="userName" class="normaltip" placeholder='username'  autocomplete="off" /><br />
<label for="password1"> Select password: </label> <br/>
<input name="password1" type="password" title="password" required id="password1" class="normaltip" placeholder='*****'  autocomplete="off" /><br />
<label for="password2" >Confirm password:</label><br />
<input name="password2" type="password" title="confirm password" required id="password2" class="normaltip" placeholder='*****'  autocomplete="off" /><br />

</div>
<div >
<label for="password2" >Gender:</label><br />
<select name="gender" title="gender" required  class="normaltip">
<option value=""> -select gender-</option>
<option value="male"> male</option>
<option value="female"> female</option>
</select><br />
<br />

<label for="country" >Country:</label><br />
<select name="country" title="country" required  class="normaltip">
<option value=""> -select Country-</option>
<option value="Uganda"> Uganda</option>
<option value="Kenya"> Kenya</option>
<option value="Rwanda"> Rwanda</option>
<option value="Burundi"> Burundi</option>
<option value="Dr Congo"> Dr Congo</option>
<option value="Tanzania"> Tanzania</option>
</select><br />
<br />

<label for="eType" >Type:</label><br />
<select name="eType" title="eType" required  class="normaltip">
<option value=""> -select type-</option>
<option value="Customer"> Customer</option>
<option value="Seller"> Seller</option>

</select><br />
<br />


<label  > Email:</label><br />
<input name="email" type="email" title="your registration number" required id="emailc" class="normaltip" placeholder='you@domain.com'  autocomplete="off" /><br />
<input name="Sign up" type="submit" value="Sign up" />
</div>
</form>
 </tr></td></table>

</body>
</html>