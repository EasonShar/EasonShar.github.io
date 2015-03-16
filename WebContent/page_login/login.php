<?php session_start(); ?>
   
   <?php include("../php/Connections/connect.php"); ?>
<?php

			$username = $_POST ['username'];
			$password = $_POST ['password'];
			
			$check_query = mysql_query ( "select*from login where username='$username'", $link );
			$array = mysql_fetch_array ( $check_query );
			$name = $array ['username'];
			$psw = $array ['password'];
			
			if ($username == "admin") { // admin login
				if ($password == $psw) {
					echo "<script>alert('admin login successfully');location.href='../admin_home.php';</script>";
					exit ();
				} else {
					echo "<script>alert('admin wrong password!');history.back();</script>";
					exit ();
				}
			} 

			else if ($password == $psw) { // user login
				$_SESSION ['username'] = $username;
				echo "<script>alert('Login successfully');location.href='../student_home.php';</script>";
				exit ();
			} else {
				echo "<script language=javascript>alert('Login failed ! Please check your username and password, if you are new here, register first!');history.back();</script>";
				exit ();
			}
			
			mysql_free_result ( $rs );
			mysql_close ( $link );
			
			?>

