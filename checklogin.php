<?php

require_once("dbconnect.php"); 
	/*$host = "localhost"; // Host name
	$username = "root"; //Mysql username
	$password = ""; //Mysql password
	$db_name = "pokemon"; //Database name
	$table_name = "users"; //Table name

	//Connect to server and select database
	mysql_connect("$host", "$username", "$password")or die("Cannot connect");
	mysql_select_db("$db_name")or die("cannot select database");*/

	//username and password sent from form
	$myusername = $_POST['myusername'];
	$mypassword = $_POST['mypassword'];
	$myemail = $_POST['myemail'];

	//To protect MySQL injection
	/*$myusername = stripslashes($myusername);
	$mypassword = stripslashes($password);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);*/
	$sqlquery="SELECT * FROM $table_name WHERE username = '$myusername' and password = '$mypassword'";
	$result = mysql_query($sqlquery);

	//mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	//If result matched $myusername and $mypassword, rable row must be 1 row
	if($count == 1){

		//register $myusername, $mypassword and redirect to file "login_success-php"
		/*session_register("myusername");
		session_register("mypassword");*/
		header("location:login_success.php");
	}
	else{
		echo "wrong username or password";
	}
?>