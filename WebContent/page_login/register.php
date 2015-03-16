<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php session_start(); ?>

<?php include("../php/Connections/connect.php"); ?>
<?php

$fullname = $_SESSION ['fullname'];
$id = $_SESSION ['id'];

$username = $_POST [username];
$password = $_POST [password];
$email = $_POST [email];
$hometown = $_POST [hometown];
$gender = $_POST [gender];

$sql = "insert into student (fullname,studentId,username,email,hometown,gender)  values('$fullname','$id','$username','$email','$hometown','$gender')";

$sql2 = "insert into login (username,password)  values('$username','$password')";

if (! mysql_query ( $sql2, $link )) {
	
	die ( 'Error: ' . mysql_error () );
}
if (! mysql_query ( $sql, $link )) 

{
	die ( 'Error: ' . mysql_error () );
}
mysql_close ( $link );

echo "<script> alert('Register successfully!');location.href='../index.php';exit;</script>";
?>

</body>
</html>

