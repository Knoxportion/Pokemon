	<?php 
	$host = "localhost"; // Host name
	$username = "root"; //Mysql username
	$password = ""; //Mysql password
	$db_name = "pokemon"; //Database name
	$table_name = "users"; //Table name

	//Connect to server and select database
	$con = mysql_connect("$host", "$username", "$password")or die("Cannot connect");
	mysql_select_db("$db_name")or die("cannot select database");
	?>