<?php

session_start ();
include ("Connections/connect.php");

$search = $_POST ['search'];
$query = mysql_query ( "select * from student WHERE fullname like '%$search%' " );

$row = mysql_fetch_array ( $query );
$list = array (
		"fullname" => $row [fullname],
		"studentId" => $row [studentID],
		"email" => $row [email],
		"gender" => $row [gender],
		"hometown" => $row [hometown],
		"group" => $row [groupID],
);
echo json_encode ( $list );

?>