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
			Peer System <small>Shar, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->

	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-style"><a href="student_home.php">Home</a></li>
			<li class="tab-style"><a href="student_group.php">Group</a></li>
			<li class="tab-style active"><a>Report</a></li>
			<li class="tab-style"><a href="student_assessment.php">Assessment</a></li>
			<li class="tab-style"><a href="student_logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-report-style"><a href="html_report/report_view.php">View
					Report</a></li>
			<li class="tab-report-style"><a href="html_report/report_Mark_1.php">Assessment
					form Group A</a></li>
			<li class="tab-report-style"><a href="html_report/report_Mark_2.php">Assessment
					form Group B</a></li>
			<li class="tab-report-style"><a href="html_report/report_Mark_3.php">Assessment
					form Group C</a></li>
		</ul>
	</div>

	<div class="content">
		<div class="col-md-6 col-md-offset-3">
			<h2>Please upload your group report.</h2>
			<input type="file" id="exampleInputFile" style="margin: 30px;">
			<p style="margin-bottom: 30px;">more information</p>
			<button type="submit" class="btn btn-default" style="margin-left: 30px;">Submit</button>
		</div>
		
	</div>
</body>
</html>