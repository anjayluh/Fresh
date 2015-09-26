<?php
	session_start();
	//Array to store validation errors
	$errmsg_arr = array();
	

	//Include database connection details
	include ("_opener_db.php");
	include ("_enc_dec.php");
	//Validation error flag
	$errflag = false;
	
		
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$eName = clean($_POST['eName']);
	$password1 = clean($_POST['password1']);
	$cpassword = clean($_POST['password2']);
	$userName = clean($_POST['userName']);
	$country = clean($_POST['country']);
	$eType = clean($_POST['eType']);
	$email = clean($_POST['email']);

	
	$gender = clean($_POST['gender']);
	//Input Validations
	
	if($userName == '') {
		$errmsg_arr[] = 'username field is missing';
		$errflag = true;
	}
	if($gender == '') {
		$errmsg_arr[] = 'gender field is missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'email field is missing';
		$errflag = true;
	}
	
		
	if( strcmp($password1, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	if( strlen($password1) <= 3 ) {
		$errmsg_arr[] = 'Password should more than three characters long';
		$errflag = true;
	}
	

//Check for duplicate login ID
	if($userName!= '') {
		$qry1 = "SELECT * FROM users WHERE userName='$userName'";
		$result1 = $connector->query($qry1);
		if($result1) {
			if(mysql_num_rows($result1) > 0) {
				$errmsg_arr[] = ' userName is already in use, please select another one';
				$errflag = true;
			}
			@mysql_free_result($result1);
		}
		else {
			die("Query failed, couldn't verify duplicate username on the database");
		}
	}
//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: _signup.php");
		exit();
	}
	
	//encrypt password 
	$encpass=enc($password1);
	
	//date
	$today = date("Y-m-d");
	//others
	$cat='regular';
	
	//Create INSERT query
	$qry2 = "INSERT INTO users (eName, gender,country,eType,password,userName,email,datein,lastedit,cat) VALUES ('$eName', '$gender','$country','$eType', '$password1','$userName', '$email','$today','$today','$cat')";
	
		//$result = @mysql_query($qry);
	$result2 = $connector->query($qry2);
	//Check whether the query was successful or not
	if($result2) {
	$errmsg_arr[] = 'You Have Successfully Registered, You can now log-in';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: _signup.php");
		exit();
	}

			
		header("location: _signup.php");
		exit();
	}else {
		die("Query failed");
		header("location: _signup.php");
		exit();
	}
?>