<?php include("php/Connections/connect.php"); ?>


 
<?php
  
//$keyword = (isset($_GET['keyword'])) ? $_GET['keyword'];

 

//echo $_COOKIE["jsCookie"];

$names=$_COOKIE["jsCookie"];

//echo $names;




$groupnumber = $_COOKIE["groupnumber"];

$row=split(',',$names);
foreach($row as $v){ $fullname= $v."<br />\n";

//$fullname1="";
//$fullname2="";
//$fullname3="";  

	
	
$sql = "update student_group set group_number='$groupnumber' where fullname='$fullname'";
//$sql2 = "update student_group set group_number='$groupnumber' where fullname='$fullname2'";
//$sql3 = "update student_group set group_number='$groupnumber' where fullname='$fullname3'";

if (! mysql_query ( $sql, $link ))
//||! mysql_query ( $sql2, $link )||!mysql_query ( $sql3, $link )) 

{
	die ( 'Error: ' . mysql_error () );
}
echo "update successfully";


}

?>

