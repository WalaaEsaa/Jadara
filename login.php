<?php
		//session_start();
	$DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '123';
    $DB_DATABASE = 'jadara';
	
	$con = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
	if(!$con) {
		die('Failed to connect to server: ' . mysql_error());
	}
	$db = mysql_select_db($DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	

	$user = $_POST['name'];
	$pass = $_POST['pass'];
	$qry="SELECT * FROM admin WHERE username='$user' AND password='$pass'";
	$result=mysql_query($qry,$con);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
				header("location: com.php");
		}else {
			die("error".mysql_error());
		}
	}else {
		die("Query failed");
	}
?>