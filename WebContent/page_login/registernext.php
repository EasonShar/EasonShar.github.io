<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document
 </title>
 <link rel="stylesheet" type="text/css" href="../css/register.css" />
</head>
<script type="text/javascript" src="../libs/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/check.js"></script> 

<body>
<?php 
 $fullname = $_POST['fullname'];
 $id = $_POST['id'];

 $_SESSION['fullname']=$fullname;
 $_SESSION['id']=$id ;
 ?>
<DIV id=login>
<form id=loginform method=post action="register.php">


<DIV class=control-group><INPUT type=text name=username id="username" placeholder="Username"><SPAN class="error" id="usernameErr"></SPAN></DIV>
<DIV class=control-group><INPUT type=password name=password id="password" placeholder="Password"><SPAN class="error" id="passwordErr"></SPAN></DIV>
<DIV class=control-group><INPUT type=password name=repassword id="repassword" placeholder="Retype Password"><SPAN class="error" id="passwordErr2"></SPAN></DIV>
<DIV class=control-group><INPUT type=text name=email id="email" placeholder="Email"><SPAN class="error" id="emailErr"></SPAN></DIV>
<DIV class=control-group><INPUT type=text name=hometown id="hometown" placeholder="Hometown"> </DIV>
<DIV><INPUT type=radio name=gender value="female">&nbsp;&nbsp;<SPAN class=icon-gender id="gender" style="color:#AAAAAA">Female</SPAN></DIV>
<DIV><INPUT type=radio name=gender value="male">&nbsp;&nbsp;<SPAN class=icon-gender id="gender" style="color:#AAAAAA">Male</SPAN></DIV>


<DIV class=login-btn><INPUT id=login-btn value="register" type=submit name=submit></DIV>

</form>
</DIV>

</body>
</html>
