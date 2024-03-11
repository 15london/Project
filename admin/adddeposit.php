<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
if(isset($_REQUEST['depositsave'])){
require_once('include/conn.php');
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
 

$actcode = "SELECT username FROM deposit WHERE  username = '$username' ";
$result = mysqli_query($login, $actcode) or die('MySql Error' . mysqli_error());
 if(!$actcode){
	echo "error" . mysqli_error();
}
if(mysqli_num_rows($result) > 0) {

	
	
	echo(" <div class='alert alert-danger alert-dismissable' align='center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                             Oops Sorry: $username  Already in the System <a href='#' class='alert-link'></a>.
                            </div>");
}else{



 $sql = "INSERT INTO deposit (dname,nxtkin,dcode,des,datedepo,itemval,mstore,amtdue,amtpaid,amtunpaid,username,password) VALUES ('$dname','$nxtkin','$dcode','$des','$datedepo','$itemval','$mstore','$amtdue','$amtpaid','$amtunpaid','$username','$password')";

 
 
 if ($login->query($sql) === TRUE) {
	 
	 echo(" <div class='alert alert-success alert-success' align='center'>
                                <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                           $dcode Record created successfully <a href='#' class='alert-link'></a>.
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
  <table width="642" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td width="244">Depositors Name</td>
      <td width="363"><label for="dcode">
        <input type="text" name="dname" id="dname" />
      </label></td>
    </tr>
    <tr>
      <td>Next of Kin</td>
      <td><input type="text" name="nxtkin" id="nxtkin" /></td>
    </tr>
    <tr>
      <td>Deposit Code</td>
      <td><input type="text" name="dcode" id="dcode" value="<?php echo $random_chars?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Item Description</td>
      <td><input type="text" name="des" id="des" /></td>
    </tr>
    <tr>
      <td>Date of Deposit</td>
      <td><input type="date" name="datedepo" id="datedepo" /></td>
    </tr>
    <tr>
      <td>Value of item</td>
      <td><input type="text" name="itemval" id="itemval" /></td>
    </tr>
    <tr>
      <td>Monthly Storage Rate</td>
      <td><input type="text" name="mstore" id="mstore" /></td>
    </tr>
    <tr>
      <td>Amount Due</td>
      <td><input type="text" name="amtdue" id="amtdue" /></td>
    </tr>
    <tr>
      <td>Amount Paid</td>
      <td><input type="text" name="amtpaid" id="amtpaid" /></td>
    </tr>
    <tr>
      <td>Balance Unpaid</td>
      <td><input type="text" name="amtunpaid" id="amtunpaid" /></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="depositsave" id="depositsave" value="Add New Deposit" /></td>
    </tr>
  </table>
</form>
</body>
</html>