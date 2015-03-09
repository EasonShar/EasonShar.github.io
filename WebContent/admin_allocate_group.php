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
<script src="js/allocate.js"></script>

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
			<li class="tab-admin-style"><a href="admin_home.php">Home</a></li>
			<li class="tab-admin-style"><a
				href="admin_allocate_student.php">Group</a></li>
			<li class="tab-admin-style active"><a>Assessment</a></li>
			<li class="tab-admin-style"><a href="rank.php">Rank</a></li>
		</ul>
	</div>
	<!--end of tab-->

	<div class="container" style="margin-top: 30px;">


		<div class="panel panel-default col-md-4 col-md-offset-2"
			style="padding-right: 0px; padding-left: 0px;">
			<div class="panel-heading">
				<h3 class="panel-title">Students List</h3>
			</div>
			<div class="panel-body">
				<div role="tabpanel">
					<ul id="sortable1"
						class="connectedSortable panel panel-default allocate-list-container">
						<li class="panel panel-default">A</li>
						<li class="panel panel-default">A</li>
						<li class="panel panel-default">A</li>
						<li class="panel panel-default">B</li>
						<li class="panel panel-default">B</li>
						<li class="panel panel-default">B</li>
						<li class="panel panel-default">C</li>
						<li class="panel panel-default">C</li>
						<li class="panel panel-default">C</li>
						<li class="panel panel-default">D</li>
						<li class="panel panel-default">D</li>
						<li class="panel panel-default">D</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="panel panel-default allocate-operation col-md-4"
			style="padding-right: 0px; padding-left: 0px;">
			<div class="panel-heading">
				<h3 class="panel-title">Group Number</h3>
			</div>
			<div class="panel-body">
				<div role="tabpanel">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="allocate-tab active"><a href="#A"
							aria-controls="A" data-toggle="tab">A</a></li>
						<li class="allocate-tab"><a href="#B" aria-controls="B"
							role="tab" data-toggle="tab">B</a></li>
						<li class="allocate-tab"><a href="#C" aria-controls="C"
							role="tab" data-toggle="tab">C</a></li>
						<li class="allocate-tab"><a href="#D" aria-controls="D"
							role="tab" data-toggle="tab">D</a></li>
						<li class="allocate-tab"><a href="#E" aria-controls="E"
							role="tab" data-toggle="tab">E</a></li>
						<li class="allocate-tab"><a href="#F" aria-controls="F"
							role="tab" data-toggle="tab">F</a></li>
						<li class="allocate-tab"><a href="#G" aria-controls="G"
							role="tab" data-toggle="tab">G</a></li>
						<li class="allocate-tab"><a href="#H" aria-controls="H"
							role="tab" data-toggle="tab">H</a></li>
						<li class="allocate-tab"><a href="#I" aria-controls="I"
							role="tab" data-toggle="tab">I</a></li>
						<li class="allocate-tab"><a href="#J" aria-controls="J"
							role="tab" data-toggle="tab">J</a></li>
						<li class="allocate-tab"><a href="#K" aria-controls="K"
							role="tab" data-toggle="tab">K</a></li>
						<li class="allocate-tab"><a href="#L" aria-controls="L"
							role="tab" data-toggle="tab">L</a></li>
						<li class="allocate-tab"><a href="#M" aria-controls="M"
							role="tab" data-toggle="tab">M</a></li>
						<li class="allocate-tab"><a href="#N" aria-controls="N"
							role="tab" data-toggle="tab">N</a></li>
						<li class="allocate-tab"><a href="#O" aria-controls="O"
							role="tab" data-toggle="tab">O</a></li>
						<li class="allocate-tab"><a href="#P" aria-controls="P"
							role="tab" data-toggle="tab">P</a></li>
						<li class="allocate-tab"><a href="#Q" aria-controls="Q"
							role="tab" data-toggle="tab">Q</a></li>
						<li class="allocate-tab"><a href="#R" aria-controls="R"
							role="tab" data-toggle="tab">R</a></li>
						<li class="allocate-tab"><a href="#S" aria-controls="S"
							role="tab" data-toggle="tab">S</a></li>
						<li class="allocate-tab"><a href="#T" aria-controls="T"
							role="tab" data-toggle="tab">T</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="A">
							<ul id="sortable2"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="B">
							<ul id="sortable3"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="C">
							<ul id="sortable4"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="D">
							<ul id="sortable5"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="E">
							<ul id="sortable6"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="F">
							<ul id="sortable7"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="G">
							<ul id="sortable8"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="H">
							<ul id="sortable9"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="I">
							<ul id="sortable10"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="J">
							<ul id="sortable11"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="K">
							<ul id="sortable12"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="L">
							<ul id="sortable13"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="M">
							<ul id="sortable14"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="N">
							<ul id="sortable15"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="O">
							<ul id="sortable16"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="P">
							<ul id="sortable17"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="Q">
							<ul id="sortable18"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="R">
							<ul id="sortable19"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="S">
							<ul id="sortable20"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="T">
							<ul id="sortable21"
								class="connectedSortable panel panel-default allocate-list-container">

							</ul>
						</div>
					</div>
					<!--End of Tab panes -->

				</div>
			</div>
			<div style="text-align: center; margin-bottom: 30px;">
				<button type="button" class="btn btn-primary" style="width: 100px;">Save</button>
			</div>
		</div>
		<!-- End of right panel -->

	</div>
</body>
</html>