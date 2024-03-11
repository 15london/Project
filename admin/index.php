<?php
	session_start();
?>
<?php
if(isset($_REQUEST['logoutadmin'])){
	unset($_SESSION['USER_ADMIN_ID']);
}

include('include/conn.php');
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Authentication</title>

    <!-- Bootstrap Core CSS -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>







<p>
  
      
      <!-- Custom Theme JavaScript -->
</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="39%" border="0" align="center" class="table-responsive">
      <tr>
        <td align="center" valign="top">Administrative Lgoin</td>
      </tr>
      <tr>
              
        <td><form class="" method="post" action="include/login-exec.php">
          
            <table width="79%" border="0" align="center" cellpadding="5" cellspacing="5" class="table">
              <tr>
                <td colspan="2" align="center"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<table id="fails">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<tr><td align="left">',$msg . '</td></tr>'; 
			
		}
		echo '</table>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></td>
              </tr>
              <tr>
            
              
                <td width="27%">Username</td>
                <td width="73%"><div class="">
                  <input name="username" type="username" class="" id="email" placeholder="Username">
                </div></td>
              </tr>
              <tr>
                <td>Password</td>
                <td>
                  <input name="password" type="password" class="" id="password" placeholder="Password">
                </td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Login" class=""></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
              </tr>
            </table>
          
        </form></td>
      </tr>
    </table>
</body>
</html>
