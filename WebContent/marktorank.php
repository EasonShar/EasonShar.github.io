<?php session_start(); 
      include("php/Connections/connect.php"); 
	  ?>

<?php 



$sql= "SELECT count(*) as number FROM grade";
$query=mysql_query ( $sql, $link );
$result=mysql_fetch_array($query);
$length=$result['number'];
//echo $length;

$rs3=mysql_query("SELECT * FROM grade order by `totalmark` ",$link);
     
	  
	  $sortmarks=array() ;
	  $sortgroups=array() ;
	  
	  while($array3=mysql_fetch_array($rs3))  
{
	
	$sortmarks[]=$array3['totalMark'];
	$sortgroups[]=$array3['groupID'];
	
	}
	
	//echo $sortmarks[0];
	//echo $sortgroups[0];
	
	
	
	for ($i = 0; $i < $length; $i++) 
{ 
	
	//echo $sortgroups[$i];
	//echo $sortmarks[$i];
	$rank= $length-$i;
	
$sql2 = "update grade set `rank`='$rank' where `groupID`='$sortgroups[$i]'";	
if (! mysql_query ( $sql2, $link )) 

{
	die ( 'Error: ' . mysql_error () );
}


	
	
	
}
	
?>