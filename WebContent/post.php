<?php include("php/Connections/connect.php");?>
<?php

$student = JSON_decode($_COOKIE ["student"]);
$groupID = JSON_decode($_COOKIE ["groupID"]);

// echo $student[0];
// echo $groupID[0];

for($i = 0; $i < count ( $student ); $i ++){
	$sql = "UPDATE student SET `groupID`= $groupID[$i] WHERE `fullname` = '$student[$i]'";
	
	if (! mysql_query ( $sql, $link )) {
		die ( 'Error: ' . mysql_error () );
	}
}
echo "<script> alert('Save successfully!');location.href='admin_allocate_student.php';exit;</script>"

?>