<HTML>
<HEAD>
<TITLE>log in page</TITLE>
<link rel="stylesheet" type="text/css" href="share.css" />
</HEAD>
<BODY>
	<h1>Peer System</h1>
	<DIV id=logo>
		<IMG alt=HongCMS src="image/icon.png">
	</DIV>
	<DIV id=login>
		<FORM id=loginform method=post action="login.php">
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

		<FORM action="registerpage.php">
			<DIV class=login-btn>
				<INPUT id=register-btn value="register" type=submit name=submit></input>
			</DIV>
		</FORM>

</BODY>
</HTML>