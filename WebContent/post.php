<?php include("php/Connections/connect.php"); ?>


 
<?php
  
//$keyword = (isset($_GET['keyword'])) ? $_GET['keyword'];

 

//echo $_COOKIE["jsCookie"];

$names=$_COOKIE["jsCookie"];

//echo $names;




$groupnumber = $_COOKIE["test"];

$row=split(',',$names);

$fullname1=$row[0];
$fullname2=$row[1];
$fullname3=$row[2];  

echo  $groupnumber;
echo  $fullname1;
echo  $fullname2;
echo  $fullname3;



	
$sql = "update student_group set group_number='$groupnumber' where fullname='$fullname1'";
$sql2 = "update student_group set group_number='$groupnumber' where fullname='$fullname2'";
$sql3 = "update student_group set group_number='$groupnumber' where fullname='$fullname3'";

if (! mysql_query ( $sql, $link )||! mysql_query ( $sql2, $link )||!mysql_query ( $sql3, $link )) 

{
	die ( 'Error: ' . mysql_error () );
}
echo "update successfully";


echo "<script>location.href='admin_allocate_student.php'</script>";

?>


