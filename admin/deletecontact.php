<?php

 
//Include database connection details


  $id = $_REQUEST['deletecont'];
  
   require_once('Connection/conn.php');
   
   $del=@mysql_query("Delete from contactdetails where id='$id'");
   if(!$del){
   die("query error" . mysql_error());
   }else if($del){
   echo("<center>deleting successful</center>");
   }




?>