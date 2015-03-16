
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
<script src="js/logout.js"></script>
<script>
$(document).ready( function() {
	$("#search-button").click(function(){
	var search = $("#searchInput").val(); 
	if(search!=""){
		$.ajax({
			  type: "POST",
			  url: "php/search.php",
			  dataType: 'json',
			  data:{
				  search : search
			   }, 
			  success: function(data) {
				  
				  var $json=eval(data);				    	  
				  var fullname = $json.fullname;
				  var studentId = $json.studentId;
				  var email = $json.email;
				  var gender = $json.gender;
				  var hometown = $json.hometown;
				  var group = $json.group;
				  document.getElementById("fullNameText").innerHTML = "<small>Full Name</small>"+fullname;
				  document.getElementById("studentIdText").innerHTML = "<small>Student ID</small>"+studentId;
				  document.getElementById("emailText").innerHTML = "<small>Email</small>"+email;
				  document.getElementById("genderText").innerHTML = "<small>Gender</small>"+gender;
				  document.getElementById("hometownText").innerHTML = "<small>Hometown</small>"+hometown;
				  document.getElementById("groupText").innerHTML = "<small>Group</small>"+group;
				  $("#search-context").show();
				  
			   },
			   error: function(data) { alert("Search Failed！") }
		  });
	}
	
	
});
});
</script>
<script type="text/javascript">
$(document).ready( function() {
	$("#close-button").click(function(){
		$("#search-context").hide();
		});
	});
</script>
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
			<li class="tab-style active"><a>Home</a></li>
			<li class="tab-style"><a href="admin_allocate_student.php">Group</a></li>
			<li class="tab-style"><a href="admin_allocate_group.php">Assessment</a></li>
			<li class="tab-style"><a href="php/totalmark.php">Rank</a></li>
			<li class="tab-style" id="logout"><a href="php/logout.php">Log Out</a></li>

		</ul>
	</div>
	<!--end of tab-->

	<div class="content">
		<div class="search-container row" id="search-container">
			<form method="post" id="searchform">
				<div class="col-md-7" style="margin-left: 100px;">
					<input type="text" name="search" class="form-control"
						id="searchInput" placeholder="Search Fullname">
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

					<h3 id="fullNameText">
						<small>Full Name</small>
						<h3 id="studentIdText">
							<small>Student ID</small>
						</h3>
						<h3 id="genderText">
							<small>Gender</small>
						</h3>
						<h3 id="hometownText">
							<small>Hometown</small>
						</h3>
						<h3 id="emailText">
							<small>Email</small>
						</h3>
						<h3 id="groupText">
							<small>Group</small>
						</h3>
						<button id="close-button" class="btn btn-default close-button">Close</button>
				
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
	$result = mysql_query ( "select*from student", $link );
	$i = 1;
	while ( $row = mysql_fetch_array ( $result ) ) {
		
		$id = $row ['studentID'];
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

</body>
</html>