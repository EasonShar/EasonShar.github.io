<?php include("Connections/connect.php");?>
<?php

$groupIndex = JSON_decode($_COOKIE ["groupIndex"]);
$groupAllocated = JSON_decode($_COOKIE ["groupAllocated"]);

for($i = 0; $i < count ( $groupIndex ); $i ++){
	$sql = "UPDATE assessment SET `groupAllocated`= $groupAllocated[$i] WHERE `groupIndex` = '$groupIndex[$i]'";
	
	if (! mysql_query ( $sql, $link )) {
		die ( 'Error: ' . mysql_error () );
	}
}
echo "<script> alert('Save successfully!');location.href='../admin_allocate_group.php';exit;</script>"

?>