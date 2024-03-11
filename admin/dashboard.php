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
<table width="100%" border="1" height="500px">
  <tr>
    <td valign="top"><table width="100%" border="0" align="center">
      <tr>
        <td align="center"><strong>Administrative Dashboard</strong></td>
      </tr>
      <tr>
        <td align="center"><table width="400" border="0">
          <tr>
            <td width="111" align="center"><a href="dashboard.php?intro">
              <input type="submit" name="button4" id="button4" value="Home">
            </a></td>
            <td width="109" align="center"><a href="dashboard.php?add"></a><a href="dashboard.php?deposit">
              <input type="submit" name="button" id="button" value="Add new Deposit">
            </a><a href="dashboard.php?add"></a></td>
            <td width="109" align="center"><a href="dashboard.php?viewdepo">
              <input type="submit" name="button6" id="button6" value="View all Deposit">
            </a></td>
            <td width="295" align="center"><a href="dashboard.php?add">
              <input type="submit" name="button3" id="button3" value="Add New Tracking">
            </a><a href="dashboard.php?viewtracks"></a></td>
            <td width="125" align="center"><a href="dashboard.php?viewtracks">
              <input type="submit" name="button2" id="button2" value="View All Tracking">
            </a><a href="index.php"></a></td>
            <td width="125" align="center"><a href="index.php">
              <input type="submit" name="button5" id="button5" value="Log Out">
            </a></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td valign="top"><?php $name = $_SESSION['USER_ADMIN_ID'];
	
           //Include database connection details
           //require_once('../config/config.php');

		 
		  // including the add admin information page to the database
		    if(isset($_REQUEST['add'])){
			   include('addtrack.php');
		   }
		   else if (isset($_REQUEST['deposit'])){
			   include('adddeposit.php');
		   }
		   else if (isset($_REQUEST['depositsave'])){
			   include('adddeposit.php'); 
		   }
		   else if (isset($_REQUEST['viewdepo'])){
			   include('viewdeposit.php');
		   }
		   else if (isset($_REQUEST['depositdetail'])){
			   include('depositdetails.php');
		   }
		   else if (isset($_REQUEST['editdeposit'])){
			   include('depositedit.php');
		   }
		   else if(isset($_REQUEST['updatedeposit'])){
			   include('depositedit.php');
		   }
		   else if(isset($_REQUEST['deletedeposit'])){
			   include('deletedepsoti.php');
		   }
		   else if(isset($_REQUEST['savetrack'])){
			   include('addtrack.php');
		   }
		   
		    else if(isset($_REQUEST['viewtracks'])){
			   include('viewtrack.php');
		   }
		   else if(isset($_REQUEST['deletestudbtn'])){
			   include('deletetrack.php');
		   }
		   else if(isset($_REQUEST['trackdetails'])){
			   include('tradedetails.php');
		   }
		   else if(isset($_REQUEST['edittrack'])){
			   include('edittrack.php');
		   }
		   else if(isset($_REQUEST['updaterack'])){
			   include('edittrack.php');
		   }
		   else {
			   include('intro.php');
		   }
		   ?></td>
        </tr>
    </table></td>
  </tr>
</table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>
