<?php session_start(); 
      include("php/Connections/connect.php"); 

      $username = $_SESSION['username'];
      $rs=mysql_query("SELECT * FROM student_information,login WHERE login.studentId = student_information.studentId AND login.username='$username'",$link);
      $array=mysql_fetch_array($rs);
      $row=mysql_num_rows($rs);?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- external library -->
<script src="libs/jquery/jquery-2.1.1.min.js"></script>
<script src="libs/jquery/jquery-ui-1.11.2.min.js"></script>
<link href="libs/jquery/jquery-ui-1.11.2.min.css" rel="stylesheet" />
<link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="libs/bootstrap/bootstrap.min.js"></script>

<!--Own coding -->
<link href="css/student.css" rel="stylesheet" />
</head>
<body>

	<div class="page-header">
		<h1>
			Peer System <small><?php echo $array['fullname'];?>, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->

	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-style active"><a>Home</a></li>
			<li class="tab-style"><a href="student_group.php">Group</a></li>
			<li class="tab-style"><a href="student_report.php">Report</a></li>
			<li class="tab-style"><a href="student_assessment.php">Assessment</a></li>
			<li class="tab-style"><a href="student_logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->
	<div class="content">
		<div class="profile-content">
			<h3>
				<small>Full Name</small><?php echo $array['fullname'];?>
			</h3>
			<h3>
				<small>Student ID</small><?php echo $array['studentId'];?>
			</h3>
			<h3>
				<small>Gender</small><?php echo $array['gender'];?>
			</h3>
			<h3>
				<small>Hometown</small><?php echo $array['hometown'];?>
			</h3>
			<h3>
				<small>Email</small><?php echo $array['email'];?>
			</h3>
			<?php $array=mysql_fetch_array($rs);?>
		</div>
		<!--end of profile list-->


		<div class="edit-profile">
			<button id="add" class="btn btn-primary btn-lg" data-toggle="modal"
				data-target="#add-event">edit</button>
		</div>



		<!--start of edit window-->
		<?php session_start(); 
      include("php/Connections/connect.php"); 

      $username = $_SESSION['username'];
      $rs1=mysql_query("SELECT * FROM student_information,login WHERE login.studentId = student_information.studentId AND login.username='$username'",$link);
      $array1=mysql_fetch_array($rs1);
      $row1=mysql_num_rows($rs1);?>
		<div class="modal fade" id="add-event" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id= editform method=post action="edit.php" >
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Edit</h4>
						</div>
						<div class="modal-body">
							<div class="row row-margin-top">
								<div class="col-xs-4 edit-profile-text">
									<p>Fullname</p>
								</div>
								<div class="col-xs-6">
									<input class="form-control"  name=fullname placeholder="<?=$array1['fullname'];?>"></input>
								</div>
							</div>

							<div class="row row-margin-top">
								<div class="col-xs-4 edit-profile-text">
									<p>Password</p>
								</div>
								<div class="col-xs-6">
									<input class="form-control"  name=password type=password placeholder="*****"></input>
								</div>
							</div>
							
							<div class="row row-margin-top">
								<div class="col-xs-4 edit-profile-text">
									<p>Retype Password</p>
								</div>
								<div class="col-xs-6">
									<input class="form-control"  type=password placeholder="*****"></input>
								</div>
							</div>
							
							<div class="row row-margin-top">
								<div class="col-xs-4 edit-profile-text">
									<p>Email</p>
								</div>
								<div class="col-xs-6">
									<input class="form-control"  name=email placeholder="<?=$array1['email'];?>"></input>
								</div>
							</div>
							
							<div class="row row-margin-top">
								<div class="col-xs-4 edit-profile-text">
									<p>Hometown</p>
								</div>
								<div class="col-xs-6">
									<input class="form-control"  name=hometown placeholder="<?=$array1['hometown'];?>"></input>
								</div>
							</div>
						</div>
						<input type="hidden" name="studentId" value="<?=$array1['studentId'];?>"/>
						<div class="modal-footer">
							<button type="button" class="btn btn-default"
								data-dismiss="modal">Close</button>
								
						    <input type="submit" value="save"></input>
								
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--end of edit window-->
	</div>
</body>
</html>