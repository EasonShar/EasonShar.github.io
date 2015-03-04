<?php session_start(); 
      include("php/Connections/connect.php"); 
      $username = $_SESSION['username'];
  
      if($_FILES['file']!="none" && $_FILES['file']!="" && $_FILES['file']['type'] == "text/xml"){
      	if($_FILES['file']['error']>0){
      		echo "Return Code:" .$_FILES['file']['error']."<br />";
      	}
      	else{
      		$time_limit = 60;
      		set_time_limit ( $time_limit );
      		$file_name = $_FILES ['file'] ['name'];
      		$file_type = $_FILES ['file'] ['type'];
      		$file_size = $_FILES ['file'] ['size'];
      		$fp = fopen($_FILES['file']['tmp_name'],"r");
      		if(!$fp)
      			die("file open error!");
      		$file_data = addslashes(fread($fp,$file_size));
      		
      		if(!$link){
      			die ( "error : mysql connect failed" );
      		}
      		$doc = new DOMDocument();
      		$doc->load($_FILES['file']);
      		$report=$doc->getElementsByTagName("report");
      		foreach($report as )
      		
      		mysql_select_db("database".$link);
      		$sql = "insert into report(username,file_name,file_type,file_size,file_data)values ('$username','$file_name','$file_type','$file_size','$file_data')";
      		$result = mysql_query($sql);
      		$report =mysql_insert_id();
      		mysql_close($link);
      		echo "<script> alert('Submit successfully');exit;</script>";
      		
      		/*if(file_exists("libs/".$_FILES['file']['name'])){
      			echo $_FILES['file']['name']. "already exists.";
      		}else{
      			move_uploaded_file($_FILES['file']['tmp_name'],"libs/".$_FILES['file']['name']);
      			echo "Stored in:"."libs/".$_FILES['file']['name'];
      		}*/
      	}	
      }
      else{
      	echo "Please make sure an XML document has been selected to upload.";
      }
      ?>