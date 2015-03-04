<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php session_start(); ?>

<?php include("php/Connections/connect.php"); ?>
<?php 
    
	$fullname = $_POST [fullname];
	$password = $_POST [password];
	$email = $_POST [email];
	$hometown = $_POST [hometown];
	$studentId=$_POST [studentId];
	$link=mysql_connect('localhost:8888','root','root');
	if (!$link)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('database',$link);
	$sql = "update student_information set fullname='$fullname',email='$email',hometown='$hometown' where studentId='$studentId'";
	$sql2 = "update login set fullname='$fullname',password='$password' where studentId='$studentId'";
	mysql_query($sql,$link);
	mysql_query($sql2,$link);
	mysql_close($link);
    echo "<script> alert('Submit edition successfully');location.href='student_home.php';exit;</script>";
	?>
</body>
</html>