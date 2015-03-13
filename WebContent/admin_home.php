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
			Peer System <small>Admin, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->

	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-admin-style active"><a>Home</a></li>
			<li class="tab-admin-style"><a href="admin_allocate_student.php">Group</a></li>
			<li class="tab-admin-style"><a href="admin_allocate_group.php">Assessment</a></li>
			<li class="tab-admin-style"><a href="rank.php">Rank</a></li>
		</ul>
	</div>
	<!--end of tab-->

	<div class="content">
		<div class="search-container row">
			<form method="post" action="search.php" name="searchform">
				<div class="col-md-7" style="margin-left: 100px;">
					<input type="text" name="search" class="form-control"
						placeholder="Search Student Name">
				</div>
				<div class="col-md-3" style="text-align: center;">
					<input type="button" class="btn btn-primary" style="width: 100px;"
						id="search-button" value="Search"></input>
				</div>
			</form>

			<div class="panel panel-default result-container" id="search-context"
				style="display: none;">
				<div class="profile-content"
					style="padding-top: 10px; padding-bottom: 10px;">
					<h3>
						<small>Full Name</small><?php echo $a;?>
			</h3>
					<h3>
						<small>Student ID</small><?php echo $b;?>
			</h3>
					<h3>
						<small>Gender</small><?php echo $d;?>
			</h3>
					<h3>
						<small>Hometown</small><?php echo $e;?>
			</h3>
					<h3>
						<small>Email</small><?php echo $c;?>
			</h3>

				</div>
				<div class="edit-profile">
					<button id="close-button" class="btn btn-default btn-lg">Close</button>
					<button id="add" class="btn btn-primary btn-lg" data-toggle="modal"
						data-target="#add-event">Edit</button>
				</div>

				<div class="modal fade" id="add-event" tabindex="-1" role="dialog"
					aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<form id=editform method=post action="edit.php">
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
											<input class="form-control" name=fullname
												placeholder="<?=$array1['fullname'];?>"></input>
										</div>
									</div>

									<div class="row row-margin-top">
										<div class="col-xs-4 edit-profile-text">
											<p>Password</p>
										</div>
										<div class="col-xs-6">
											<input class="form-control" name=password type=password
												placeholder="*****"></input>
										</div>
									</div>

									<div class="row row-margin-top">
										<div class="col-xs-4 edit-profile-text">
											<p>Retype Password</p>
										</div>
										<div class="col-xs-6">
											<input class="form-control" type=password placeholder="*****"></input>
										</div>
									</div>

									<div class="row row-margin-top">
										<div class="col-xs-4 edit-profile-text">
											<p>Email</p>
										</div>
										<div class="col-xs-6">
											<input class="form-control" name=email
												placeholder="<?=$array1['email'];?>"></input>
										</div>
									</div>

									<div class="row row-margin-top">
										<div class="col-xs-4 edit-profile-text">
											<p>Hometown</p>
										</div>
										<div class="col-xs-6">
											<input class="form-control" name=hometown
												placeholder="<?=$array1['hometown'];?>"></input>
										</div>
									</div>
								</div>
								<input type="hidden" name="studentId"
									value="<?=$array1['studentID'];?>" />
								<div class="modal-footer">
									<button type="button" class="btn btn-default"
										data-dismiss="modal">Close</button>

									<input type="submit" class="btn btn-primary" value="save"></input>

								</div>
							</form>
						</div>
					</div>
				</div>
				<!--end of edit window-->
			</div>


		</div>


		<div class="panel panel-default report-container">
			<div class="panel-heading">
				<h3 class="panel-title">Students List</h3>
			</div>
			<div class="panel-body">
				<div class="bs-example" data-example-id="striped-table">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Full Name</th>
								<th>Student ID</th>
								<th>Email</th>
								<th>Gender</th>
							</tr>
						</thead>

						<tbody>
 <?php
	
	include ("php/Connections/connect.php");
	$result = mysql_query ( "select*from student_information", $link );
	$i = 1;
	while ( $row = mysql_fetch_array ( $result ) ) {
		
		$id = $row ['studentId'];
		$fullname = $row ['fullname'];
		$email = $row ['email'];
		$gender = $row ['gender'];
		echo " <tr> ";
		echo "<th scope=row>$i</th> ";
		echo " <td> $fullname  </td> ";
		echo " <td> $id  </td> ";
		echo " <td> $email  </td> ";
		echo " <td> $gender  </td> ";
		$i += 1;
		echo " </tr> ";
	}
	?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){ 
	    $("#search-button").click(function(){
	        $("#search-context").show();
	        document.getElementById("searchform").sumbit();
	        //$("#searchform").sumbit();
	    });
	});
	$(document).ready(function(){ 
	    $("#close-button").click(function(){
	        $("#search-context").hide();
	        document.getElementById("searchform").sumbit();
	        //$("#searchform").sumbit();
	    });
	});
	</script>

</body>
</html>