<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id = $_REQUEST['depositdetail'];
require_once('include/conn.php');
$query_pag_data = "SELECT * from deposit where id = '$id'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysqli_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
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
//$tin = $_POST['tin'];

?>


<form id="form1" name="form1" method="post" action="">
  <table width="642" border="0" align="center" cellpadding="3" cellspacing="5">
    <tr>
      <td width="227">Depositors Name</td>
      <td width="380"><?php echo $dname ?></td>
    </tr>
    <tr>
      <td>Next of Kin</td>
      <td><?php echo $nxtkin ?></td>
    </tr>
    <tr>
      <td>Deposit Code</td>
      <td><?php echo $dcode ?></td>
    </tr>
    <tr>
      <td>Item Description</td>
      <td><?php echo $des ?></td>
    </tr>
    <tr>
      <td>Date of Deposit</td>
      <td><?php echo $datedepo ?></td>
    </tr>
    <tr>
      <td>Value of item</td>
      <td><?php echo $itemval ?></td>
    </tr>
    <tr>
      <td>Monthly Storage Rate</td>
      <td><?php echo $mstore ?></td>
    </tr>
    <tr>
      <td>Amount Due</td>
      <td><?php echo $amtdue ?></td>
    </tr>
    <tr>
      <td>Amount Paid</td>
      <td><?php echo $amtpaid ?></td>
    </tr>
    <tr>
      <td>Balance Unpaid</td>
      <td><?php echo $amtunpaid ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo $username ?></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><?php echo $password ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php
}
?>
</body>
</html>