<?php session_start(); ?>
   
<?php include("../php/Connections/connect.php"); ?>


<?php  


 $time = date('y-m-d h:i:s',time());
 $content = $_POST['content'];
 
 $username = $_SESSION['username'];
 
 //$username="milli";
 //$content="jjjoooo";
 
 $sql = "insert into forum (username,content,date) values('$username ','$content','$time') ";
 
 if (! mysql_query ( $sql, $link )) 

{
	die ( 'Error: ' . mysql_error () );
}



 echo "<script>location.href='../student_group.php';</script>";


 ?>