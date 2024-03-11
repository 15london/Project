<?php
	session_start();
	//Include database connection details
	require_once('Connection/conn.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect($hostname_login, $username_login, $password_login) or trigger_error(mysql_error(),E_USER_ERROR); 
	//$link = mysql_pconnect('maxshippers.yourwebhostingmysql.com', 'courier', 'courier') or trigger_error(mysql_error(),E_USER_ERROR);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('courier');
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['pass']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Empty username not allowed';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Empty password not allowed';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['USER_ADMIN_ID'] = $user['username'];
			

			session_write_close();
			header("location: view.php");
			exit();
		}else {
			//Login failed
		    $errmsg_arr[] = 'Provide a valid user name and password';
		    $errflag = true;
	       //If there are input validations, redirect back to the login form
	       if($errflag) {
		     $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		     session_write_close();
		     header("location: index.php");
		     exit();
	       }			
		}
	}else {
		die("Query failed");
	}
?>