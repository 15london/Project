<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
if(isset($_REQUEST['savetrack'])){
require_once('include/conn.php');
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
 

$actcode = "SELECT num FROM trackings WHERE  num = '$num' ";
$result = mysqli_query($login, $actcode) or die('MySql Error' . mysqli_error());
 if(!$actcode){
	echo "error" . mysqli_error();
}
if(mysqli_num_rows($result) > 0) {

	
	
	echo(" <div class='alert alert-danger alert-dismissable' align='center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                             Oops Sorry: $num  Already in the System <a href='#' class='alert-link'></a>.
                            </div>");
}else{



 $sql = "INSERT INTO trackings (num,shipperadd,receiveradd,origin,package,status,destination,carrier,shiptype,weight,shipmode,carefno,product,qty,paymode,totalfrieght,exptdelvrydate,deptime,pickdate,picktime,comment) VALUES ('$num','$shipperadd','$receiveradd','$origin','$package','$status','$destination','$carrier','$shiptype','$weight','$shipmode','$carefno','$product','$qty','$paymode','$totalfrieght','$exptdelvrydate','$deptime','$pickdate','$picktime','$comment')";

 
 
 if ($login->query($sql) === TRUE) {
	 
	 echo(" <div class='alert alert-success alert-success' align='center'>
                                <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                           $num Record created successfully <a href='#' class='alert-link'></a>.
                            </div>");
} else {
    echo "Error: " . $sql . "<br>" . $login->error;
}

$login->close();
 
 
}
 
 
}
	  	
	  	
?>
<?php
//To Pull 7 Unique Random Values Out Of AlphaNumeric

$characters = array("0","1","2","3","4","5","6","7","8","9");

//make an "empty container" or array for our keys
$keys = array();

//first count of $keys is empty so "1", remaining count is 1-6 = total 7 times
while(count($keys) < 9) {
    //"0" because we use this to FIND ARRAY KEYS which has a 0 value
    //"-1" because were only concerned of number of keys which is 32 not 33
    //count($characters) = 33
    $x = mt_rand(0, count($characters)-1);
    if(!in_array($x, $keys)) {
       $keys[] = $x;
    }
}

foreach($keys as $key){
   @$random_chars .= $characters[$key];
}

//echo"VIP-$random_chars";

?>

<form id="form1" name="form1" method="post" action="">
  <table width="1025" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td width="244">Tracking Number</td>
      <td width="220"><label for="num"></label>
      <input type="text" name="num" id="num" value="<?php echo "GDS".$random_chars?>" readonly="readonly" /></td>
      <td width="156">Carrier</td>
      <td width="340"><input type="text" name="carrier" id="carrier" /></td>
    </tr>
    <tr>
      <td>Shipper's Address</td>
      <td><input type="text" name="shipperadd" id="shipperadd" /></td>
      <td>Ship type</td>
      <td><input type="text" name="shiptype" id="shiptype" /></td>
    </tr>
    <tr>
      <td>Receiver's Address</td>
      <td><input type="text" name="receiveradd" id="receiveradd" /></td>
      <td>weight</td>
      <td><input type="text" name="weight" id="weight" /></td>
    </tr>
    <tr>
      <td>Country of Origin</td>
      <td><input type="text" name="origin" id="origin" /></td>
      <td>ship mode</td>
      <td><input type="text" name="shipmode" id="shipmode" /></td>
    </tr>
    <tr>
      <td>Package</td>
      <td><input type="text" name="package" id="package" /></td>
      <td>carefno</td>
      <td><input type="text" name="carefno" id="carefno" /></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input type="text" name="status" id="status" /></td>
      <td>Product</td>
      <td><input type="text" name="product" id="product" /></td>
    </tr>
    <tr>
      <td>Destination</td>
      <td><input type="text" name="destination" id="destination" /></td>
      <td>Quantity</td>
      <td><input type="text" name="qty" id="qty" /></td>
    </tr>
    <tr>
      <td>paymode</td>
      <td><input type="text" name="paymode" id="paymode" /></td>
      <td>Total frieght</td>
      <td><input type="text" name="totalfrieght" id="totalfrieght" /></td>
    </tr>
    <tr>
      <td>Experted Delivery Date</td>
      <td><input type="text" name="exptdelvrydate" id="exptdelvrydate" /></td>
      <td>Departure Time</td>
      <td><input type="text" name="deptime" id="deptime" /></td>
    </tr>
    <tr>
      <td>Pickup Date</td>
      <td><input type="text" name="pickdate" id="pickdate" /></td>
      <td>Pick Time</td>
      <td><input type="text" name="picktime" id="picktime" /></td>
    </tr>
    <tr>
      <td>Comment</td>
      <td><input type="text" name="comment" id="comment" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="savetrack" id="savetrack" value="Save Tracking" /></td>
    </tr>
  </table>
</form>
</body>
</html>