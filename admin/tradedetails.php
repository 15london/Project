<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
$id = $_REQUEST['trackdetails'];
require_once('include/conn.php');
$query_pag_data = "SELECT * from trackings where id = '$id'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysqli_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
	$id = $rows['id'];
      $num = $rows['num'];
	  $shipperadd = $rows['shipperadd'];
	 $receiveradd = $rows['receiveradd'];
	 $id = $rows['id'];
$num = $rows['num'];
$shipperadd = $rows['shipperadd'];
$receiveradd = $rows['receiveradd'];
$origin= $rows['origin'];
$package= $rows['package'];
$status = $rows['status'];
$destination = $rows['destination'];
$carrier = $rows['carrier'];
$shiptype = $rows['shiptype'];
$weight = $rows['weight'];
$shipmode = $rows['shipmode'];
$carefno = $rows['carefno'];
$product = $rows['product'];
//$file = $_FILES['file']['name'];
$qty = $rows['qty'];
$paymode = $rows['paymode'];
$totalfrieght = $rows['totalfrieght'];
$exptdelvrydate = $rows['exptdelvrydate'];
$deptime = $rows['deptime'];
$pickdate = $rows['pickdate'];
$picktime = $rows['picktime'];
$comment = $rows['comment'];
//$tin = $_POST['tin'];

?>


<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <table width="867" border="1" align="center" cellpadding="7" cellspacing="7">
    <tr>
      <td width="223"><strong>Tracking Number:</strong></td>
      <td width="215"><label for="num"></label>
      <?php echo $num ?></td>
      <td width="152"><strong>Carrier</strong></td>
      <td width="176"><?php echo $carrier ?></td>
    </tr>
    <tr>
      <td><strong>Shipper's Address</strong></td>
      <td><?php echo $shipperadd ?></td>
      <td><strong>Ship type</strong></td>
      <td><?php echo $shiptype ?></td>
    </tr>
    <tr>
      <td><strong>Receiver's Address</strong></td>
      <td><?php echo $receiveradd ?></td>
      <td><strong>weight</strong></td>
      <td><?php echo $weight ?></td>
    </tr>
    <tr>
      <td><strong>Country of Origin</strong></td>
      <td><?php echo $origin ?></td>
      <td><strong>ship mode</strong></td>
      <td><?php echo $shipmode ?></td>
    </tr>
    <tr>
      <td><strong>Package</strong></td>
      <td><?php echo $package ?></td>
      <td><strong>carefno</strong></td>
      <td><?php echo $carefno ?></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td><?php echo $status ?></td>
      <td><strong>Product</strong></td>
      <td><?php echo $product ?></td>
    </tr>
    <tr>
      <td><strong>Destination</strong></td>
      <td><?php echo $destination ?></td>
      <td><strong>Quantity</strong></td>
      <td><?php echo $qty ?></td>
    </tr>
    <tr>
      <td><strong>paymode</strong></td>
      <td><?php echo $paymode ?></td>
      <td><strong>Total frieght</strong></td>
      <td><?php echo $totalfrieght ?></td>
    </tr>
    <tr>
      <td><strong>Experted Delivery Date</strong></td>
      <td><?php echo $exptdelvrydate ?></td>
      <td><strong>Departure Time</strong></td>
      <td><?php echo $picktime ?></td>
    </tr>
    <tr>
      <td><strong>Pickup Date</strong></td>
      <td><?php echo $pickdate ?></td>
      <td><strong>Pick Time</strong></td>
      <td><?php echo $picktime ?></td>
    </tr>
    <tr>
      <td><strong>Comment</strong></td>
      <td>
      <?php echo $comment ?></td>
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