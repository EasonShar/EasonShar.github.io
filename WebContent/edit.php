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
	
	$username = $_SESSION['username'];
	$rs1=mysql_query("SELECT * FROM student_information,login WHERE login.studentId = student_information.studentId AND login.username='$username'",$link);
	$array1=mysql_fetch_array($rs1);
	$row1=mysql_num_rows($rs1);
	
	if($fullname==""){
		$fullname=$array1['fullname'];
	}
	if($password==""){
		$password=$array1['password'];
	}
	if($email==""){
		$email=$array1['email'];
	}
	if($hometown==""){
		$hometown=$array1['hometown'];
	}
	
	$sql = "update student_information set fullname='$fullname',email='$email',hometown='$hometown' where studentId='$studentId'";
	$sql2 = "update login set fullname='$fullname',password='$password' where studentId='$studentId'";
	mysql_query($sql,$link);
	mysql_query($sql2,$link);
	mysql_close($link);
    echo "<script> alert('Submit edition successfully');location.href='student_home.php';exit;</script>";
	?>
</body>
</html>