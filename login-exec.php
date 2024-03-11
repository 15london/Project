<?php
ob_start();
session_start();
require_once('conn.php');


//Array to store validation errors


$errmsg_arr = array();
//Validation error flag
$errflag = false;	


	
$num = $_POST['num'];

 	
//Input Validations
	if($num == '') {
		$errmsg_arr[] = 'Empty email not allowed';
		$errflag = true;
	}
	
	
//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: tracker.php");
		exit();
	}
	

// query
//$qry="SELECT * FROM users WHERE email='$email' AND password='$password'";
$query= "SELECT * FROM  tracking WHERE num='$num' ";
	$result=mysqli_query($login, $query);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) >= 1) {
			//Login Successful
			session_regenerate_id();
			$user = mysqli_fetch_assoc($result);
			$_SESSION['USER_ADMIN_ID'] = $user['email'];
			$_SESSION['PRIVILEDGE'] = $user['privi'];
			

			session_write_close();
			header("location: trackerinfo.php");
			exit();
		}else {
			//Login failed
		    $errmsg_arr[] = 'Provide a valid user name and password';
		    $errflag = true;
	       //If there are input validations, redirect back to the login form
	       if($errflag) {
		     $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		     session_write_close();
		     header("location: tracker.php");
		     exit();
	       }			
		}
	}else {
		die("Query failed");
	}
?>





