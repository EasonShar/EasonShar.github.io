<?php include("php/Connections/connect.php"); ?>
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
<script src="cookie.js"></script>
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
			<li class="tab-admin-style active"><a>Group</a></li>
			<li class="tab-admin-style"><a href="admin_allocate_group.html">Assessment</a></li>
			<li class="tab-admin-style"><a href="rank.html">Rank</a></li>
		</ul>
	</div>
	<!--end of tab-->

	<div class="container" style="margin-top: 30px;">


		<div class="panel panel-default col-md-4 col-md-offset-2"
			style="padding-right: 0px; padding-left: 0px;">
			<div class="panel-heading">
				<h3 class="panel-title">Students List</h3>
			</div>
            
            <?php 
			 $student=array("Milli Zhu","Nenyao Wang","Qiuyu Wang","Maomao Zheng","Eason Shar"
			 ,"Jay","Tom","Cindy","Emma","Jason","angelababy","Cheer");
			 
			 
			 ?>
			<div class="panel-body">
				<div role="tabpanel">
					<ul id="sortable1"
						class="connectedSortable panel panel-default allocate-list-container">
						<li class="panel panel-default"><?php echo $student[0]?></li>
						<li class="panel panel-default"><?php echo $student[1]?></li>
						<li class="panel panel-default"><?php echo $student[2]?></li>
						<li class="panel panel-default"><?php echo $student[3]?></li>
						<li class="panel panel-default"><?php echo $student[4]?></li>
						<li class="panel panel-default"><?php echo $student[5]?></li>
						<li class="panel panel-default"><?php echo $student[6]?></li>
						<li class="panel panel-default"><?php echo $student[7]?></li>
						<li class="panel panel-default"><?php echo $student[8]?></li>
						<li class="panel panel-default"><?php echo $student[9]?></li>
						<li class="panel panel-default"><?php echo $student[10]?></li>
						<li class="panel panel-default"><?php echo $student[11]?></li>
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
					<ul id="tabs"class="nav nav-tabs" role="tablist">
						<li class="allocate-tab active"><a href="#A"  onclick="show(0)"
							aria-controls="A" data-toggle="tab">A</a></li>
						<li class="allocate-tab"><a href="#B" aria-controls="B" onclick="show(1)"
							role="tab" data-toggle="tab">B</a></li>
						<li class="allocate-tab"><a href="#C" aria-controls="C" onclick="show(2)"
							role="tab" data-toggle="tab">C</a></li>
						<li class="allocate-tab"><a href="#D" aria-controls="D" onclick="show(3)"
							role="tab" data-toggle="tab">D</a></li>
						<li class="allocate-tab"><a href="#E" aria-controls="E" onclick="show(4)"
							role="tab" data-toggle="tab">E</a></li>
						<li class="allocate-tab"><a href="#F" aria-controls="F" onclick="show(5)"
							role="tab" data-toggle="tab">F</a></li>
						<li class="allocate-tab"><a href="#G" aria-controls="G" onclick="show(6)"
							role="tab" data-toggle="tab">G</a></li>
						<li class="allocate-tab"><a href="#H" aria-controls="H" onclick="show(7)"
							role="tab" data-toggle="tab">H</a></li>
						<li class="allocate-tab"><a href="#I" aria-controls="I" onclick="show(8)"
							role="tab" data-toggle="tab">I</a></li>
						<li class="allocate-tab"><a href="#J" aria-controls="J" onclick="show(9)"
							role="tab" data-toggle="tab">J</a></li>
						<li class="allocate-tab"><a href="#K" aria-controls="K" onclick="show(10)"
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


<?php  
$result=mysql_query("select*from translation_input",$link);


?>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="A">
							<ul id="sortable2" 
								class="connectedSortable panel panel-default allocate-list-container">
                           <li class="panel panel-default"><?php echo $student[1]?></li>
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
            
            
            
  <script type="text/javascript">
  


function show(id){
    var tab = document.getElementById("tabs").getElementsByTagName("a");
    var groupnumber;
	groupnumber=tab[id].innerHTML;
	//alert (groupnumber);
	setCookie("test",groupnumber,1800);         
     
   
}
 
		
		$(function(){
		  $("p").click(function(){
			  
			var ulNode;
			var i;
			
			i = getCookie('test'); 
			
			if(i=="A") {  ulNode= document.getElementById("sortable2"); }
			if(i=="B") {  ulNode= document.getElementById("sortable3"); }
			if(i=="C") {  ulNode= document.getElementById("sortable4"); }
			if(i=="D") {  ulNode= document.getElementById("sortable5"); }
			
			
			//var ulNode = document.getElementById("sortable2");
			var childrens = ulNode.childNodes;
			
			var len = childrens.length;
			var groupmembers = "";
			
			for(var i=1;i<len;i++){
				
				//alert(childrens[i].nodeName);
				//alert(childrens[i].innerHTML);
				var a = getCookie('test'); 
				groupmembers=groupmembers+childrens[i].innerHTML+"\n";
			    
				
			}
		   
			alert("group: "+a+ "\n"+groupmembers);  
			
			//document.cookie="groupmember"+groupmembers
		    //location.href='post.php';

  
var strs= new Array(); //定义一数组 
strs=groupmembers.split("\n"); //字符分割 
	
		

setCookie("jsCookie",strs,1800);

		location.href='post.php';
		  });
		})
		
		
	
  </script>
  
 
  
  
  
  
  
  
			<div style="text-align: center; margin-bottom: 30px;">
				<p><button type="button"  id="btnsave" style="width: 100px;">Save</button></p>
			</div>
		</div>
		<!-- End of right panel -->

	</div>
    
  
</body>
</html>
