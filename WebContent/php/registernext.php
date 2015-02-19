<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document
 </title>
 <link rel="stylesheet" type="text/css" href="share.css" />
</head>

<body>
 <?php 
 $fullname = $_POST['fullname'];
 $id = $_POST['id'];

 $_SESSION['fullname']=$fullname;
 $_SESSION['id']=$id ;
 ?>
 
<DIV id=login>
<form id=loginform method=post action="register.php">

<DIV class=control-group><SPAN class=icon-user></SPAN><INPUT type=text name=username placeholder="Username"></DIV>
<DIV class=control-group><SPAN class=icon-lock></SPAN><INPUT type=password name=password placeholder="Password"></DIV>
<DIV class=control-group><SPAN class=icon-lock></SPAN><INPUT type=password name=repassword placeholder="Retype Password"></DIV>
<DIV class=control-group><SPAN class=icon-mail></SPAN><INPUT type=text name=email placeholder="Email"> </DIV>
<DIV><INPUT type=radio name=gender value="female">&nbsp;&nbsp;<SPAN class=icon-gender style="color:#AAAAAA">Female</SPAN></DIV>
<DIV><INPUT type=radio name=gender value="male">&nbsp;&nbsp;<SPAN class=icon-gender style="color:#AAAAAA">Male  </SPAN></DIV>


<DIV class=login-btn><INPUT id=login-btn value="register" type=submit name=submit></DIV>
</form>
</DIV>





</body>
</html>