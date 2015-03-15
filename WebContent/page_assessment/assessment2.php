<?php
session_start ();
include ("../php/Connections/connect.php");

$username = $_SESSION ['username'];
$rs = mysql_query ( "SELECT * FROM student WHERE username='$username'", $link );
$array = mysql_fetch_array ( $rs );
$groupID = $array ['groupID'];

$rs2 = mysql_query ( "select groupAuthor from assessment WHERE groupAllocated = '$groupID'", $link );
$groupAuthor1 = mysql_result ( $rs2, 0 );
$groupAuthor2 = mysql_result ( $rs2, 1 );
$groupAuthor3 = mysql_result ( $rs2, 2 );

$rs3 = mysql_query ( "select * from assessment WHERE groupAllocated='$groupID' AND groupAuthor='$groupAuthor2'" );
$array3 = mysql_fetch_array ( $rs3 );
if (isset ( $_POST ['submit'] )) {
	$mark = $_POST [mark];
	$comments = $_POST [comments];
	if (! empty ( $array3 ['mark'] ) || ! empty ( $array3 ['comments'] )) {
		echo "<script> alert('Your group has already submitted assessment.');location.href='assessmen2.php';exit;</script>";
	} else {
		$submit = "update assessment set mark='$mark',comments='$comments' WHERE groupAllocated='$groupID' AND groupAuthor='$groupAuthor2'";
		mysql_query ( $submit, $link );
		echo "<script> alert('Submit successfully');location.href='assessment2.php';exit;</script>";
	}
}
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
			<li class="tab-style"><a href="../student_report.php">Report</a></li>
			<li class="tab-style active"><a href="../student_assessment.php">Assessment</a></li>
			<li class="tab-style" id="logout"><a href="../php/logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-assessment-style"><a href="assessment1.php">Group
					<?php echo $groupAuthor1;?> Report</a></li>
			<li class="tab-assessment-style active"><a>Group <?php echo $groupAuthor2;?> Report</a></li>
			<li class="tab-assessment-style"><a href="assessment3.php">Group
					<?php echo $groupAuthor3;?> Report</a></li>
		</ul>
	</div>
	<!--end of secondary tab-->
 <?php
	if (! isset ( $groupAuthor2 ) or $groupAuthor2 == "")
		die ( "error:This group has not uploaded report." );
	
	$sql = "select * from grade where groupID='$groupAuthor2'";
	$result = mysql_query ( $sql, $link );
	$array2 = mysql_fetch_array ( $result );
	?>
	<div class="content">
		<div class="panel panel-default report-container">
			<div class="panel-heading">
				<h3 class="panel-title">Tittle:<?php echo $array2['report_title'];?></h3>
			</div>
			<div class="panel-body">
				<p><?php echo $array2['report_content'];?></p>
			</div>
		</div>
		<!--end of report container-->
		<form id="markform" method=post
			action="<?php echo $_SERVER['PHP_SELF'];?>">
			<div class="row">
				<div class="col-md-1 col-md-offset-2">
					<h4>Mark</h4>
				</div>
				<div class="col-md-2">
					<input class="form-control" name="mark" placeholder="out of 100">
				</div>
			</div>

			<div class="row">
				<div class="col-md-1 col-md-offset-2">
					<h4>Comments</h4>
				</div>
				<div class="col-md-7">
					<textarea class="form-control assessment-comments" name="comments"
						rows="6" style="max-width: 734px;"></textarea>
				</div>
			</div>

			<div style="text-align: center; margin-bottom: 30px;">
				<input type="submit" name="submit" value="submit"
					class="btn btn-default" style="width: 300px;"></input>
			</div>
		</form>

	</div>


</body>
</html>