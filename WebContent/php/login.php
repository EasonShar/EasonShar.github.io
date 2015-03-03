<?php session_start(); ?>
   
   <?php include("Connections/connect.php"); ?>
<?php  

 
 $username = $_POST['username'];
 $password = $_POST['password'];
 


$check_query = mysql_query("select username from login where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
      $name=$result['username'];
	 if($name=="admin"){
		 
		 echo "<script>location.href='../admin_home.php';</script>"; 
		 }
	 
	 
	 else{
	$_SESSION['username']=$username;
    echo "<script>location.href='../student_home.php';</script>";  
	
	 }
	 }
  
  
 else {
    exit('login failed ! please check your username and password, if you are new here, register first !<a href="javascript:history.back(-1);"> back</a> ');
}




?>


