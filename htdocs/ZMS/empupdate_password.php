<?php 
	include "connection.php";
	include "navbar.php";
	include "style.php";

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="reg.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee Change Password</title>
<style type="text/css">
    body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
 .middle{
  float: right;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}
.btn{
  background: none;
  border: 1px solid #000;
  font-family: "montserrat",sans-serif;
  text-transform: uppercase;
  padding: 1px 2px;
  min-width: 200px;
  margin: 1px;
  cursor: pointer;
  transition: color 0.4s linear;
  position: relative;
  background-color: #34495e;
  border-radius: 30px;
}
.btn:hover{
  color: #fff;
}
.btn::before{
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #0000;
  z-index: -1;
  transition: transform 0.5s;
  transform-origin: 0 0;
  transition-timing-function: cubic-bezier(0.5,1.6,0.4,0.7);
}
.btn1::before{
  transform: scaleX(0);
}
  </style>
</head>
<body>
	<div class="container">
    <div class="card">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">ZOO Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">Employee Update Password</h1><br>
		<div class="label-float">
		<form action="" method="post" >
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<div class="middle"><br><br>
			<button class="btn btn btn1" type="submit" name="submit" >Update</button>
			</div>
		</div>
		</form>

	</div>
	
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE employee SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                alert("The Password Updated Successfully.");
              </script> 

				<?php
			}
			
		}
	?></div>
</body>
</html>