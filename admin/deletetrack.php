




<?php




$id = $_REQUEST['deletestudbtn'];
//$num = $_REQUEST['studentid'];
   require_once('include/conn.php');
   $sql = "DELETE from trackings where id = '$id'";
   
   if (mysqli_query($login, $sql)) {
      echo(" <div class='alert alert-success alert-dismissable' align='center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                              <a href='dashboard.php?viewtracks' class='alert-link'>Record Deleted Successfully. [Ok]</a>.
                            </div>");
   } elseif(!$sql)
	   echo mysqli_error();
	   
   
   
   mysqli_close($login);
?>