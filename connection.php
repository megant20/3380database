<?php

	$db=mysqli_connect("localhost","root","","zoo");  
					/* server name, username, passwor, database name */

if(!$db)
{
	die("Connection failed:" . mysqli_connect_error());
}

echo "Connected Success";
?>