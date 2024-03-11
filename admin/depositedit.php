<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id = $_REQUEST['editdeposit'];
include ('include/conn.php');

$query="SELECT * from deposit where id = '$id'";
$result = mysqli_query($login, $query);


while($rows = mysqli_fetch_array($result)){
    
	$id = $rows['id'];
      $dname = $rows['dname'];
$nxtkin = $rows['nxtkin'];
$dcode = $rows['dcode'];
$des= $rows['des'];
$datedepo = $rows['datedepo'];
$itemval = $rows['itemval'];
$mstore = $rows['mstore'];
$amtpaid = $rows['amtpaid'];
$amtdue = $rows['amtdue'];
$amtunpaid = $rows['amtunpaid'];
$username = $rows['username'];
$password = $rows['password'];
?>

<?php
if(isset($_REQUEST['updatedeposit'])){
require_once('include/conn.php');
$id = $_POST['id'];
$dname = $_POST['dname'];
$nxtkin = $_POST['nxtkin'];
$dcode = $_POST['dcode'];
$des= $_POST['des'];
$datedepo = $_POST['datedepo'];
$itemval = $_POST['itemval'];
$mstore = $_POST['mstore'];
$amtpaid = $_POST['amtpaid'];
$amtdue = $_POST['amtdue'];
$amtunpaid = $_POST['amtunpaid'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($login,"UPDATE  deposit SET dname='$dname',nxtkin='$nxtkin',dcode='$dcode',des='$des',datedepo='$datedepo',
                           itemval='$itemval',mstore='$mstore',amtpaid='$amtpaid',amtdue='$amtdue',amtunpaid='$amtunpaid',username='$username',password='$password' WHERE id='$id'");

 
  if(!$sql){
	 die("query error" . mysqli_error()); 
	 }else if($sql){
		 
		echo(" <div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                               $dcode.  Updated successful! <a href='dashboard.php?viewtracks' class='alert-link'> Ok</a>.
                            </div>");
	
	 }
	 
}
?>

<form id="form1" name="form1" method="post" action="">
  <table width="642" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td>&nbsp;</td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/></td>
    </tr>
    <tr>
      <td width="244">Depositors Name</td>
      <td width="363"><label for="dcode">
        <input type="text" name="dname" id="dname"  value="<?php echo $dname ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Next of Kin</td>
      <td><input type="text" name="nxtkin" id="nxtkin"  value="<?php echo $nxtkin ?>"/></td>
    </tr>
    <tr>
      <td>Deposit Code</td>
      <td><input type="text" name="dcode" id="dcode" value="<?php echo $dcode ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Item Description</td>
      <td><input type="text" name="des" id="des" value="<?php echo $des ?>"/></td>
    </tr>
    <tr>
      <td>Date of Deposit</td>
      <td><input type="date" name="datedepo" id="datedepo" value="<?php echo $datedepo ?>"/></td>
    </tr>
    <tr>
      <td>Value of item</td>
      <td><input type="text" name="itemval" id="itemval" value="<?php echo $itemval ?>" /></td>
    </tr>
    <tr>
      <td>Monthly Storage Rate</td>
      <td><input type="text" name="mstore" id="mstore"  value="<?php echo $mstore ?>"/></td>
    </tr>
    <tr>
      <td>Amount Due</td>
      <td><input type="text" name="amtdue" id="amtdue"  value="<?php echo $amtdue ?>"/></td>
    </tr>
    <tr>
      <td>Amount Paid</td>
      <td><input type="text" name="amtpaid" id="amtpaid" value="<?php echo $amtpaid ?>"/></td>
    </tr>
    <tr>
      <td>Balance Unpaid</td>
      <td><input type="text" name="amtunpaid" id="amtunpaid" value="<?php echo $amtunpaid ?>"/></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username" id="username" value="<?php echo $username ?>"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" id="password" value="<?php echo $password ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="updatedeposit" id="updatedeposit" value="Update Records" /></td>
    </tr>
  </table>
</form>
<?php
}
?>
</body>
</html>