<HTML>
<HEAD>
<TITLE>log in page</TITLE>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</HEAD>
<BODY>
	<h1>Peer System</h1>
	<DIV id=logo>
		<IMG alt=HongCMS src="image/logo_ucl.jpg">
	</DIV>
	<DIV id=login>
		<FORM id=loginform method=post action="page_login/login.php">
			<DIV class=control-group>
				<INPUT type=text name=username placeholder="Username">
			</DIV>
			<DIV class=control-group>
				<INPUT type=password name=password placeholder="Password">
			</DIV>

			<DIV class=login-btn>
				<INPUT id=login-btn value="log in" type=submit name=submit>
			</DIV>
		</FORM>

		<FORM action="page_login/registerpage.php">
			<DIV class=login-btn>
				<INPUT id=register-btn value="register" type=submit name=submit></input>
			</DIV>
		</FORM>

</BODY>
</HTML>