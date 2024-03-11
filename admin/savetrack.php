<?php
if(isset($_REQUEST['addnumbtn'])){
	//Include database connection details
require_once('Connection/conn.php');
	 
 $num = $_POST['num'];
 $shipperadd = $_POST['shipperadd'];
 $receiveradd = $_POST['receiveradd'];
 $origin = $_POST['origin'];
 $package = $_POST['package'];
 $status = $_POST['status'];
 $destination = $_POST['destination'];
 $carrier = $_POST['carrier'];
 $shiptype = $_POST['shiptype'];
 $weight = $_POST['weight'];
 $shipmode = $_POST['shipmode'];
 $carefno = $_POST['carefno'];
 $product = $_POST['product'];
 $qty = $_POST['qty'];
 $paymode = $_POST['paymode'];
 $totalfrieght = $_POST['totalfrieght'];
 $exptdelvrydate = $_POST['exptdelvrydate'];
 $deptime = $_POST['deptime'];
 $pickdate = $_POST['pickdate'];
 $picktime = $_POST['picktime'];
 $comment = $_POST['comment'];
	 
	
$enter = mysql_query("INSERT INTO tracking2 (num,shipperadd,receiveradd,origin,package,status,destination,carrier,shiptype,weight,shipmode,carefno,product,qty,paymode,totalfrieght,exptdelvrydate,deptime,pickdate,picktime,comment) values('$num','$shipperadd','$receiveradd','$origin','$package','$status','$destination','$carrier','$shiptype','$weight','$shipmode','$carefno','$product','$qty','$paymode','$totalfrieght','$exptdelvrydate','$deptime','$pickdate','$picktime','$comment')");
if(!$enter){
	 echo ("query error" . mysql_error());
}	 
else{
	
	 echo("<center> New Tracking Number Added successful </center>"); 
}	 
	 
	 

	
	 
}
?>