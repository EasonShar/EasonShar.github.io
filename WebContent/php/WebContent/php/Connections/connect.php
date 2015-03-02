<?php
// FileName="Connection_php_mysql.htm"
// Type="MYSQL"
// HTTP="true"
$hostname_milli = "localhost:8888";
$database_milli = "database";
$username_milli = "root";
$password_milli = "root";
$link = mysql_pconnect ( $hostname_milli, $username_milli, $password_milli ) or trigger_error ( mysql_error (), E_USER_ERROR );
mysql_select_db ( "database" );
?>