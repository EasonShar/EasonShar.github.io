<?php

session_start ();
include ("../php/Connections/connect.php");

$username = $_SESSION ['username'];
$rs = mysql_query ( "SELECT * FROM student WHERE username='$username'", $link );
$array = mysql_fetch_array ( $rs );
$groupID = $array ['groupID'];

$rs2 = mysql_query ( "select groupAllocated from assessment WHERE groupAuthor = '$groupID'", $link );
$groupAllocated1 = mysql_result ( $rs2, 0 );
$groupAllocated2 = mysql_result ( $rs2, 1 );
$groupAllocated3 = mysql_result ( $rs2, 2 );

$rs3 = mysql_query ( "select * from assessment WHERE groupAuthor='$groupID' AND groupAllocated='$groupAllocated3'" );
$array3 = mysql_fetch_array ( $rs3 );
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- external library -->
<script src="../libs/jquery/jquery-2.1.1.min.js"></script>
<script src="../libs/jquery/jquery-ui-1.11.2.min.js"></script>
<link href="../libs/jquery/jquery-ui-1.11.2.min.css" rel="stylesheet" />
<link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="../libs/bootstrap/bootstrap.min.js"></script>

<!--Own coding -->
<link href="../css/student.css" rel="stylesheet" />
<script src="../js/logout.js"></script>
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
			<li class="tab-style"><a href="../student_home.php">Home</a></li>
			<li class="tab-style"><a href="../student_group.php">Group</a></li>
			<li class="tab-style active"><a href="../student_report.php">Report</a></li>
			<li class="tab-style"><a href="../student_assessment.php">Assessment</a></li>
			<li class="tab-style" id="logout"><a href="../php/logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-report-style"><a href="report_view.php">View Report
					and Rank</a></li>
			<li class="tab-report-style"><a href="report_Mark_1.php">Assessment
					form Group <?php echo $groupAllocated1;?></a></li>
			<li class="tab-report-style"><a href="report_Mark_2.php">Assessment
					form Group <?php echo $groupAllocated2;?></a></li>
			<li class="tab-report-style active"><a>Assessment form Group
					<?php echo $groupAllocated3;?></a></li>
		</ul>
	</div>

	<div class="content">
		<div class="panel panel-default report-container">
			<div class="panel-heading">
				<h3 class="panel-title">Grade: <?php echo $array3['mark'];?> </h3>
			</div>
			<div class="panel-body">
				<p>Comments: <?php echo $array3['comments'];?></p>
			</div>
		</div>
	</div>
	<!--end of report container-->
	</div>
</body>
</html>