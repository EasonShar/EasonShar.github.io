<?php
session_start ();
include ("php/Connections/connect.php");

$username = $_SESSION ['username'];
$rs = mysql_query ( "SELECT * FROM student WHERE username='$username'", $link );
$array = mysql_fetch_array ( $rs );
$groupID = $array ['groupID'];

$rs2 = mysql_query ( "select groupAllocated from assessment WHERE groupAuthor = '$groupID'", $link );
$groupAllocated1 = mysql_result ( $rs2, 0 );
$groupAllocated2 = mysql_result ( $rs2, 1 );
$groupAllocated3 = mysql_result ( $rs2, 2 );
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
<script src="libs/jquery/ajaxupload.js"></script>
<link href="libs/jquery/jquery-ui-1.11.2.min.css" rel="stylesheet" />
<link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="libs/bootstrap/bootstrap.min.js"></script>


<!--Own coding -->
<link href="css/student.css" rel="stylesheet" />
<script src="js/logout.js"></script>
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
			<li class="tab-style"><a href="student_home.php">Home</a></li>
			<li class="tab-style"><a href="student_group.php">Group</a></li>
			<li class="tab-style active"><a>Report</a></li>
			<li class="tab-style"><a href="student_assessment.php">Assessment</a></li>
			<li class="tab-style" id="logout"><a href="php/logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-report-style"><a href="page_report/report_view.php">View
					Report and Rank</a></li>
			<li class="tab-report-style"><a href="page_report/report_Mark_1.php">Assessment
					form Group <?php echo $groupAllocated1;?></a></li>
			<li class="tab-report-style"><a href="page_report/report_Mark_2.php">Assessment
					form Group <?php echo $groupAllocated2;?></a></li>
			<li class="tab-report-style"><a href="page_report/report_Mark_3.php">Assessment
					form Group <?php echo $groupAllocated3;?></a></li>
		</ul>
	</div>

	<div class="content">
		<form method="post" action="php/upload_file.php"
			enctype="multipart/form-data">
			<div class="col-md-6 col-md-offset-3">
				<h2>Please upload your group report.</h2>
				<input type="hidden" name="Max_FILE_SIZE" value="1000000"> <input
					type="file" name="file" id="exampleInputFile" Value="Choose file"
					style="margin: 30px;">
				<p style="margin-bottom: 30px;">more information</p>

				<input type="submit" name="submit" value="Submit"
					class="btn btn-default" style="margin-left: 30px;"></input>
				<div class="files"></div>

			</div>
		</form>
	</div>
</body>
</html>