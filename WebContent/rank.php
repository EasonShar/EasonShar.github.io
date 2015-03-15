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
			Peer System <small>Admin, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->

	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-style"><a href="admin_home.php">Home</a></li>
			<li class="tab-style"><a href="admin_allocate_student.php">Group</a></li>
			<li class="tab-style"><a href="admin_allocate_group.php">Assessment</a></li>
			<li class="tab-style active"><a>Rank</a></li>
			<li class="tab-style" id="logout"><a href="php/logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->

	<div class="content">
		<div class="panel panel-default report-container">
			<div class="panel-heading">
				<h3 class="panel-title">Rank</h3>
			</div>
			<div class="panel-body">
				<div class="bs-example" data-example-id="striped-table">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Rank</th>
								<th>Group</th>
								<th>Totalmark</th>

							</tr>
						</thead>
						<tbody>
                        
                        
                        
<?php include("php/Connections/connect.php"); ?>
<?php

$result = mysql_query ( "SELECT * FROM grade order by `rank` ", $link );

while ( $row = mysql_fetch_array ( $result ) ) {
	
	$rank = $row ['rank'];
	$groupID = $row ['groupID'];
	$totalMark = $row ['totalMark'];
	
	echo " <tr> ";
	echo "<th scope=row>$rank</th> ";
	echo " <td> $groupID </td> ";
	echo " <td> $totalMark  </td> ";
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