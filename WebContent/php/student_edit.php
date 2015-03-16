<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php session_start(); ?>

<?php include("Connections/connect.php"); ?>
<?php

$fullname = $_POST [fullname];
$password = $_POST [password];
$email = $_POST [email];
$hometown = $_POST [hometown];
$studentId = $_POST [studentId];

$username = $_SESSION ['username'];
$rs1 = mysql_query ( "SELECT * FROM student, login WHERE student.username='$username' AND login.username='$username'", $link );
$array1 = mysql_fetch_array ( $rs1 );
$row1 = mysql_num_rows ( $rs1 );

if ($fullname == "") {
	$fullname = $array1 ['fullname'];
}
if ($password == "") {
	$password = $array1 ['password'];
}
if ($email == "") {
	$email = $array1 ['email'];
}
if ($hometown == "") {
	$hometown = $array1 ['hometown'];
}

$sql = "update student set fullname='$fullname',email='$email',hometown='$hometown' where username='$username'";
$sql2 = "update login set password='$password' where username='$username'";
mysql_query ( $sql, $link );
mysql_query ( $sql2, $link );
mysql_close ( $link );
echo "<script> alert('Submit edition successfully');location.href='../student_home.php';exit;</script>";
?>
</body>
</html>