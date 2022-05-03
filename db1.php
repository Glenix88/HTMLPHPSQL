<?php
	$servername='localhost';
	$username='root';
	$password='K3yH0ld3r88G!';
	$dbname = "db_connect";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}
?>