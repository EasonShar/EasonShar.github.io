<?php session_start(); 
      include("php/Connections/connect.php"); 
	  ?>


<?php 

$groups=array("A","B","C","D","E","F","G","H","I","J");
//"K","L","M","N","O","P","Q","R","S","T");
$length=count($groups);
for ($i = 0; $i < $length; $i++) 
{ 
//echo $groups[$i];

 $rs3=mysql_query("SELECT * FROM assessment WHERE groupAuthor='$groups[$i]'",$link);
     
	  
	  $marks=array() ;
	  
	  while($array3=mysql_fetch_array($rs3))  
{
	
	$marks[]=$array3['mark'];
	
	}

    $marki= $marks[0] ;
	$markii= $marks[1] ;
	$markiii= $marks[2] ;

$totalmark=($marki+$markii+$markiii)/3;
echo $groups[$i];
echo $totalmark;


$sql = "update grade set `totalMark`='$totalmark' where `groupID`='$groups[$i]'";
if (! mysql_query ( $sql, $link )) 

{
	die ( 'Error: ' . mysql_error () );
}




} 




echo "<script>javascript:location.href='marktorank.php';</script>";





?>