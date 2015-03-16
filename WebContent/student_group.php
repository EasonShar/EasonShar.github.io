<?php
session_start ();
include ("php/Connections/connect.php");
$username = $_SESSION ['username'];
$rs = mysql_query ( "SELECT * FROM student WHERE student.username='$username'", $link );
$array = mysql_fetch_array ( $rs );
$fullname = $array ['fullname'];
$groupID = $array ['groupID'];

$rs2 = mysql_query ( "select groupAuthor from assessment WHERE groupAllocated = '$groupID'", $link );
$groupAuthor1 = mysql_result ( $rs2, 0 );
$groupAuthor2 = mysql_result ( $rs2, 1 );
$groupAuthor3 = mysql_result ( $rs2, 2 );

$rs3 = mysql_query ( "SELECT fullname FROM student WHERE groupID='$groupID' and fullname!='$fullname'", $link );
$member1 = mysql_result ( $rs3, 0 );
$member2 = mysql_result ( $rs3, 1 );

$rs4 = mysql_query ( "select groupAllocated from assessment WHERE groupAuthor = '$groupID'", $link );
$groupAllocated1 = mysql_result ( $rs4, 0 );
$groupAllocated2 = mysql_result ( $rs4, 1 );
$groupAllocated3 = mysql_result ( $rs4, 2 );
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
<script src="js/logout.js"></script>
</head>
<body>

	<div class="page-header">
		<h1>
			Peer System <small><?php echo $fullname;?>, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-style"><a href="student_home.php">Home</a></li>
			<li class="tab-style active"><a>Group</a></li>
			<li class="tab-style"><a href="student_report.php">Report</a></li>
			<li class="tab-style"><a href="student_assessment.php">Assessment</a></li>
			<li class="tab-style" id="logout"><a href="php/logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->

	<div class="content">
		<h2 style="margin-left: 30px;">
		<?php if($groupID == null){
			echo "You have not been allocated to any Group.";
		}else {
			echo "Your are allocated to Group ";
			echo $groupID;
		}?></h2>
		<div class="bs-example" data-example-id="collapse-accordion"
			style="text-align: center;">
			<div class="panel-group" id="accordion" role="tablist"
				aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne"
						data-toggle="collapse" data-parent="#accordion"
						href="#collapseOne" aria-expanded="false"
						aria-controls="collapseOne" class="collapsed">
						<h3 class="panel-title">Group Members</h3>
					</div>
					<div id="collapseOne" class="panel-collapse collapse"
						role="tabpanel" aria-labelledby="headingOne" aria-expanded="false"
						style="height: 0px;">
						<div class="panel-body">
							<h4><?php echo $member1;?></h4>
							<h4><?php echo $member2;?></h4>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo"
						data-toggle="collapse" data-parent="#accordion"
						href="#collapseTwo" aria-expanded="false"
						aria-controls="collapseTwo" class="collapsed">
						<h3 class="panel-title">Give Assessment to Groups</h3>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse"
						role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false"
						style="height: 0px;">
						<div class="panel-body">
							<h4>Group <?php echo $groupAuthor1;?></h4>
							<h4>Group <?php echo $groupAuthor2;?></h4>
							<h4>Group <?php echo $groupAuthor3;?></h4>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree"
						data-toggle="collapse" data-parent="#accordion"
						href="#collapseThree" aria-expanded="false"
						aria-controls="collapseThree" class="collapsed">
						<h3 class="panel-title">Get Assessment from Groups</h3>
					</div>
					<div id="collapseThree" class="panel-collapse collapse"
						role="tabpanel" aria-labelledby="headingThree"
						aria-expanded="false" style="height: 0px;">
						<div class="panel-body">
							<h4>Group <?php echo $groupAllocated1;?></h4>
							<h4>Group <?php echo $groupAllocated2;?></h4>
							<h4>Group <?php echo $groupAllocated3;?></h4>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFour"
						data-toggle="collapse" data-parent="#accordion"
						href="#collapseFour" aria-expanded="false"
						aria-controls="collapseFour" class="collapsed">
						<h3 class="panel-title">Forum</h3>
					</div>
					<?php
					
					$username1 = mysql_query ( "SELECT username FROM studnent WHERE fullname='$member1'", $link );
					echo $username1;
					?>

					<div id="collapseFour" class="panel-collapse collapse"
						role="tabpanel" aria-labelledby="headingFour"
						aria-expanded="false" style="height: 0px;">
						<div class="panel-body">
							<div class="panel panel-default forum-discuss"
								style="margin-bottom: 30px;">
								<div class="row">     
<?php
$memberuser = array ();
$rs4 = mysql_query ( "SELECT username as u FROM student WHERE fullname='$member1' ", $link );
while ( $array4 = mysql_fetch_array ( $rs4 ) ) {
	$memberuser [0] = $array4 ['u'];
}

$rs5 = mysql_query ( "SELECT username as u FROM student WHERE fullname='$member2' ", $link );
while ( $array5 = mysql_fetch_array ( $rs5 ) ) {
	$memberuser [1] = $array5 ['u'];
}

$result = mysql_query ( "select*from forum where username= '$username' or username= '$memberuser[1]'or username= '$memberuser[0]'order by date ", $link );

$a = array ();
while ( $row = mysql_fetch_array ( $result ) ) {
	$user = $row ['username'];
	$content = $row ['content'];
	$arr = array (
			$username,
			' ' 
	);
	
	$usernamespace = implode ( "", $arr );
	
	if ($user == $username or $user == $usernamespace) {
		echo " <div class=\"col-xs-12\"> ";
		echo " <div class=\"popover left\">";
		echo " <div class=\"arrow\"></div>";
		echo " <h3 class=\"popover-title\"> ";
		echo $user;
		echo " </h3>";
		echo "<div class=\"popover-content\">";
		echo " <p>  $content   </p>";
		echo " </div>";
		echo " </div>";
		echo " </div>";
	} else {
		echo " <div class=col-xs-12> ";
		echo " <div class=\"popover right\">";
		echo " <div class=arrow></div>";
		echo " <h3 class=popover-title> ";
		echo $user;
		echo "</h3>";
		echo "<div class=\"popover-content\">";
		echo " <p>  $content   </p>";
		echo " </div>";
		echo " </div>";
		echo " </div>";
	}
}
?>   
								</div>
							</div>
							<form method=post action="php/forum.php">
								<div class="row">
									<div class="col-md-1 col-md-offset-2">
										<h4>Contents</h4>
									</div>
									<div class="col-md-7">
										<textarea name="content"
											class="form-control assessment-comments" rows="6"
											style="max-width: 734px;"></textarea>
									</div>
								</div>
								<div style="text-align: center; margin-bottom: 30px;">
									<input class="btn btn-default" style="width: 300px;"
										value="Post" type=submit name=submit>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>