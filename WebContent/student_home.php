<?php session_start(); ?>
<?php include("php/Connections/connect.php"); ?>


<?php 


$username= $_SESSION['username']; 

$result = mysql_query("select *from login where username='$username'  limit 1");

	
  
	 
while($row=mysql_fetch_array($result))  

{

        $studentID = $row['studentID'];
		 
		 $fullname = $row['fullname'];
 
}
 ?>
 
<?php 

$result = mysql_query("select *from student_information where studentID='$studentID'  limit 1");

while($row=mysql_fetch_array($result))  

{

         $email = $row['email'];
		 
		 $hometown = $row['hometown'];
         $gender = $row['gender'];
		 if ($gender=="0"){
			 
			 $gendername="female" ;
			 
			 }
		else $gendername="male" ;
}
// 问题



 ?>
 
 
 
 
 
 
 
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
			Peer System <small><?php echo $username ?>, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->

	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-style active"><a>Home</a></li>
			<li class="tab-style"><a href="student_group.html">Group</a></li>
			<li class="tab-style"><a href="student_report.html">Report</a></li>
			<li class="tab-style"><a href="student_assessment.html">Assessment</a></li>
			<li class="tab-style"><a href="student_logout.html">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->

	<div class="content">
		<div class="profile-content">
			<h3>
				<small>Full Name</small><?php echo $fullname ?>
			</h3>
			<h3>
				<small>Student ID</small><?php echo $studentID ?>
			</h3>
			<h3>
				<small>Gender</small><?php echo $gendername ?>
			</h3>
			<h3>
				<small>Nationality</small><?php echo $hometown ?>
			</h3>
			<h3>
				<small>Date of Birth</small>31/07/1992
			</h3>
			<h3>
				<small>Email</small><?php echo $email ?>
			</h3>
		</div>
		<!--end of profile list-->


		<div class="edit-profile">
			<button id="add" class="btn btn-primary btn-lg" data-toggle="modal"
				data-target="#add-event">edit</button>
		</div>



		<!--start of edit window-->
		<div class="modal fade" id="add-event" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form>
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
									<p>Full Name</p>
								</div>
								<div class="col-xs-6">
									<input class="form-control" id="name-field"></input>
								</div>
							</div>

							<div class="row row-margin-top">
								<div class="col-xs-4 edit-profile-text">
									<p>Email</p>
								</div>
								<div class="col-xs-6">
									<input class="form-control" id="duration-field"></input>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default"
								data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary"
								data-dismiss="modal" id="save">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--end of edit window-->
	</div>
</body>
</html>