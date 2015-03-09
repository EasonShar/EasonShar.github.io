<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>register</TITLE>
<link rel="stylesheet" type="text/css" href="share.css" />


</HEAD>
<BODY>
	<DIV id=logo>
		<IMG alt=HongCMS src="image/icon .png">
	</DIV>
	<DIV id=login>
		<FORM id=loginform method=post action="registernext.php">
			<DIV class=control-group>
				<SPAN class=icon-user></SPAN><INPUT type=text name=fullname
					placeholder="Fullname">
			</DIV>
			<DIV class=control-group>
				<SPAN class=icon-lock></SPAN><INPUT type=text name=id
					placeholder="student ID">
			</DIV>


			<DIV class=login-btn>
				<INPUT id=register-btn value="next" type=submit name=submit>
			</DIV>
		</FORM>


		<FORM action="loginpage.php">
			<DIV class=login-btn>
				<INPUT id=login-btn value="back" type=submit name=submit>
			</DIV>
		</FORM>

</BODY>
</HTML>



