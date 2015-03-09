<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome!</title>
</head>

<body>
<h1>Peer System</h1>
<?php session_start(); ?>

<?php include("Connections/connect.php"); ?>
<?php 
$a = $_SESSION['username'];
//$rs=mysql_query("SELECT * FROM student_information,login WHERE login.studentId = student_information.studentId AND login.username='$a'",$link);
$rs=mysql_query("SELECT * FROM student,login WHERE login.username = student.username",$link);
$array=mysql_fetch_array($rs);
$row=mysql_num_rows($rs);?>
<table >
<?php for($i=0;$i<$row;$i++){?>
	<tr>
	<td><?php echo $array['fullname'];?></td>
	<td><?php echo $array['gender'];?></td>
	<td><?php echo $array['hometown'];?></td>
	<td><?php echo $array['email'];?></td>
	</tr>
	<?php $array=mysql_fetch_array($rs);}?>
	</table>
<?php 	
/*echo "Welcome, ".$array['fullname'];
echo $array['gender'];
echo $array['studentId'];*/


?>
</body>
</html>