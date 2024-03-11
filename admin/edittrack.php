<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
$id = $_REQUEST['edittrack'];
include ('include/conn.php');

$query="SELECT * from trackings where id = '$id'";
$result = mysqli_query($login, $query);


while($rows = mysqli_fetch_array($result)){
  
  
  $id = $rows['id'];
$num = $rows['num'];
$shipperadd = $rows['shipperadd'];
$receiveradd = $rows['receiveradd'];
$origin= $rows['origin'];
$package = $rows['package'];
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
<?php
if(isset($_REQUEST['updaterack'])){
require_once('include/conn.php');
$id = $_POST['id'];
$num = $_POST['num'];
$shipperadd = $_POST['shipperadd'];
$receiveradd = $_POST['receiveradd'];
$origin= $_POST['origin'];
$package = $_POST['package'];
$status = $_POST['status'];
$destination = $_POST['destination'];
$carrier = $_POST['carrier'];
$shiptype = $_POST['shiptype'];
$weight = $_POST['weight'];
$shipmode = $_POST['shipmode'];
$carefno = $_POST['carefno'];
$product = $_POST['product'];
//$file = $_FILES['file']['name'];
$qty = $_POST['qty'];
$paymode = $_POST['paymode'];
$totalfrieght = $_POST['totalfrieght'];
$exptdelvrydate = $_POST['exptdelvrydate'];
$deptime = $_POST['deptime'];
$pickdate = $_POST['pickdate'];
$picktime = $_POST['picktime'];
$comment = $_POST['comment'];
//$tin = $_POST['tin'];
 

$sql = mysqli_query($login,"UPDATE  trackings SET num='$num',shipperadd='$shipperadd',receiveradd='$receiveradd',origin='$origin',package='$package',
                           status='$status',destination='$destination',carrier='$carrier',shiptype='$shiptype',weight='$weight',shipmode='$shipmode',carefno='$carefno',product='$product',qty='$qty',paymode='$paymode',totalfrieght='$totalfrieght',exptdelvrydate='$exptdelvrydate',deptime='$deptime',pickdate='$pickdate',picktime='$picktime',comment='$comment' WHERE id='$id'");

 
  if(!$sql){
	 die("query error" . mysqli_error()); 
	 }else if($sql){
		 
		echo(" <div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                               $num.  Updated successful! <a href='dashboard.php?viewtracks' class='alert-link'> Ok</a>.
                            </div>");
	
	 }
	 
}
?>

<form id="form1" name="form1" method="post" action="">
  <table width="1025" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td><input name="id" type="hidden" class="form-control" id="id" value="<?php echo $rows['id']; ?>"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="244">Tracking Number</td>
      <td width="220"><label for="num"></label>
      <input type="text" name="num" id="num" value="<?php echo $num ?>" readonly="readonly" /></td>
      <td width="156">Carrier</td>
      <td width="340"><input type="text" name="carrier" id="carrier" value="<?php echo $rows['carrier']; ?>"/></td>
    </tr>
    <tr>
      <td>Shipper's Address</td>
      <td><input type="text" name="shipperadd" id="shipperadd" value="<?php echo $rows['shipperadd']; ?>"/></td>
      <td>Ship type</td>
      <td><input type="text" name="shiptype" id="shiptype" value="<?php echo $rows['shiptype']; ?>"/></td>
    </tr>
    <tr>
      <td>Receiver's Address</td>
      <td><input type="text" name="receiveradd" id="receiveradd" value="<?php echo $rows['receiveradd']; ?>"/></td>
      <td>weight</td>
      <td><input type="text" name="weight" id="weight" value="<?php echo $rows['weight']; ?>"/></td>
    </tr>
    <tr>
      <td>Country of Origin</td>
      <td><input type="text" name="origin" id="origin" value="<?php echo $rows['origin']; ?>"/></td>
      <td>ship mode</td>
      <td><input type="text" name="shipmode" id="shipmode" value="<?php echo $rows['shipmode']; ?>"/></td>
    </tr>
    <tr>
      <td>Package</td>
      <td><input type="text" name="package" id="package" value="<?php echo $rows['package']; ?>"/></td>
      <td>carefno</td>
      <td><input type="text" name="carefno" id="carefno" value="<?php echo $rows['carefno']; ?>"/></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input type="text" name="status" id="status" value="<?php echo $rows['status']; ?>"/></td>
      <td>Product</td>
      <td><input type="text" name="product" id="product" value="<?php echo $rows['product']; ?>"/></td>
    </tr>
    <tr>
      <td>Destination</td>
      <td><input type="text" name="destination" id="destination" value="<?php echo $rows['destination']; ?>"/></td>
      <td>Quantity</td>
      <td><input type="text" name="qty" id="qty" value="<?php echo $rows['qty']; ?>"/></td>
    </tr>
    <tr>
      <td>paymode</td>
      <td><input type="text" name="paymode" id="paymode" value="<?php echo $rows['paymode']; ?>"/></td>
      <td>Total frieght</td>
      <td><input type="text" name="totalfrieght" id="totalfrieght" value="<?php echo $rows['totalfrieght']; ?>"/></td>
    </tr>
    <tr>
      <td>Experted Delivery Date</td>
      <td><input type="text" name="exptdelvrydate" id="exptdelvrydate" value="<?php echo $rows['exptdelvrydate']; ?>"/></td>
      <td>Departure Time</td>
      <td><input type="text" name="deptime" id="deptime" value="<?php echo $rows['deptime']; ?>"/></td>
    </tr>
    <tr>
      <td>Pickup Date</td>
      <td><input type="text" name="pickdate" id="pickdate" value="<?php echo $rows['pickdate']; ?>"/></td>
      <td>Pick Time</td>
      <td><input type="text" name="picktime" id="picktime" value="<?php echo $rows['picktime']; ?>"/></td>
    </tr>
    <tr>
      <td>Comment</td>
      <td valign="top"><textarea name="comment" cols="30" rows="5" id="comment"><?php echo $rows['comment']; ?></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="updaterack" id="updaterack" value="Update Tracking" /></td>
    </tr>
  </table>
</form>
<?php
}
	?>
</body>
</html>