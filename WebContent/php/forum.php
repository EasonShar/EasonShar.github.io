<?php session_start(); ?>
   
<?php include("Connections/connect.php"); ?>


<?php

$time = date ( 'y-m-d H:i:s', time () );
$content = $_POST ['content'];

$username = $_SESSION ['username'];

$sql = "insert into forum (username,content,date) values('$username ','$content','$time') ";

if (! mysql_query ( $sql, $link )) 

{
	die ( 'Error: ' . mysql_error () );
}

echo "<script>location.href='../student_group.php';</script>";

?>