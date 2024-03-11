<?php
/*

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_login = "maxshippers.yourwebhostingmysql.com";
$database_login = "courier";
$username_login = "courier";
$password_login = "courier";
$login = mysql_pconnect($hostname_login, $username_login, $password_login) or trigger_error(mysql_error(),E_USER_ERROR); 


$data = mysql_select_db($database_login);
if(!$data){
die("No database Selected");
}
*/
?>


<?php


# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_login = "localhost";
$database_login = "standard";
$username_login = "root";
$password_login = "";
$login = mysql_pconnect($hostname_login, $username_login, $password_login) or trigger_error(mysql_error(),E_USER_ERROR); 


$data = mysql_select_db($database_login);
if(!$data){
die("No database Selected");
}

?>