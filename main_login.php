<!DOCTYPE html>
<html>
<head>
	<title>Pokédex</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css"></link>
	<link rel="stylesheet" type="text/css" href="css/responsive.css"></link>
</head>
<body>
	<div class="header">
		
		<nav>
			<a href="index.html"><img src="img/dragonair.gif" alt="Dragonair" height="70" width="70"></a>
			<a href="index.html"> Home </a>
			<a href="evolution.html"> Evolution</a>
			<a href="pokedex.html"> Pokédex </a>
			<a href="map.html"> Pokémon locations </a>
			<a href="main_login.php">Log in</a>
		</nav>
	</div>
	<div id="loginform">
		<table  border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
			<tr>
				<form name="form1" method="POST" action="checklogin.php">
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#cce6ff">
						<tr>
							<td colspan="3"><strong>Member login </strong></td>
							</tr> 
							<tr>
								<td width="78">Username</td>
								<td width="6">:</td>
								<td width="294"><input name="myusername" type="text" id="myusername"></td>
							</tr>
							<tr>
								<td>Password</td>
									<td>:</td>
									<td><input name="mypassword" type="text" id="mypassword"></td>
							</tr>
							<tr>
								<td>Email</td>
									<td>:</td>
									<td><input name="myemail" type="text" id="myemail"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type="submit" name="Submit" value="Login"></td>
							</tr>	
					</table>
			</td>
				</form>
		</tr>
	</table>

	</div>
</body>
</html>

<?php



 ?>