<?php

session_start ();
include ("Connections/connect.php");
$username = $_SESSION ['username'];
$rs = mysql_query ( "SELECT * FROM student WHERE username='$username'", $link );
$array = mysql_fetch_array ( $rs );
$group_number = $array ['groupID'];

if ($_FILES ['file'] != "none" && $_FILES ['file'] != "" && $_FILES ['file'] ['type'] == "text/xml") {
	$time_limit = 60;
	set_time_limit ( $time_limit );
	$file_name = $_FILES ['file'] ['name'];
	$file_type = $_FILES ['file'] ['type'];
	$file_size = $_FILES ['file'] ['size'];
	$fp = fopen ( $_FILES ['file'] ['tmp_name'], "r" );
	if (! $fp)
		die ( "file open error!" );
	$file_data = addslashes ( fread ( $fp, $file_size ) );
	fclose ( $fp );
	
	if (file_exists ( "../upload/" . $_FILES ['file'] ['name'] )) {
		echo "<script> alert('File already exist,please change the file name');location.href='../student_report.php';exit;</script>";
	} else {
		move_uploaded_file ( $_FILES ["file"] ["tmp_name"], "../upload/" . $_FILES ["file"] ["name"] );
		$file_path = "../upload/" . $_FILES ["file"] ["name"];
		$sql = "select * from grade where groupID = '$group_number'";
		$result = mysql_query ( $sql, $link );
		$array2 = mysql_fetch_array ( $result );
		if ( ( $array2['file_path'] ) !="") {
			echo "<script> alert('Your group has already upload report. Please view your report.');location.href='../page_report/report_view.php';</script>";
		} else {
			
			$sql1 = "UPDATE grade SET `file_path` = '$file_path' WHERE `groupID`= '$group_number'";
			$result1 = mysql_query ( $sql1, $link );
			echo "<script> alert('Submit successfully!To view your report');location.href='../page_report/report_view.php';</script>";
		}
	}
} else {
	echo "<script> alert('Please make sure an XML document has been selected to upload.');location.href='../student_report.php';</script>";
}
?>
      		