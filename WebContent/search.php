<?php session_start(); 
      include("php/Connections/connect.php");     
      $username = $_SESSION['username'];
      
      $search = $_POST['search'];
      $query = mysql_query("select * from student_information WHERE fullname like '%$search%' ");
      while ($row=mysql_fetch_array($query)){
      	  $a = $row['fullname'];
      	  $b = $row['studentId'];
      	  $c = $row['email'];
      	  $d = $row['gender'];
      	  $e = $row['hometown'];
      	  echo $e;
      }
?>