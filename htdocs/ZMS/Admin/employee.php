<?php
  include "connection.php";
  include "navbar.php";
  include "style.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.srch
		{
			padding-left: 850px;
		}
		body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}

	</style>
</head>
<body>

<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))
                	
                { 
                    echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                
                ?>
            </div>
<br><br>  
  <div class="h"><a href="profile.php">Profile</a></div>
  <div class="h"><a href="addEmp.php">Add Employee</a></div>
  <div class="h"><a href=".php">Delete Employee</a></div>
  <div class="h"><a href=".php">Edit Employee</a></div>
  <div class="h"><a href="logout.php">Logout</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

	<!--__________________________search bar________________________-->
<div class="container">
	<form style="padding-top: 20px;" method="post">
		<button class="btn btn1" style="float: left; name" name="submit_m" type="submit">Send Email</button>
	</form>
	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="Employee username.." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn1">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>

		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="employeeID" placeholder="Enter Employee ID" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit1" class="btn btn1">Delete
				</button>
		</form>
	</div>

	<h2>List Of Employees</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT first,last,username,attractionID,locationID,managerID,employeeID,ssn,email,phone_number,data_hired FROM `employee` where username like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No employee found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "First Name";	echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "attractionID";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['first']; echo "</td>";
				echo "<td>"; echo $row['last']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['attractionID']; echo "</td>";
	
				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT first,last,username,attractionID,locationID,managerID,employeeID,ssn,email,phone_number,data_hired FROM `employee`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "First Name";	echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "attraction ID";  echo "</th>";
				echo "<th>"; echo "Location ID";  echo "</th>";
				echo "<th>"; echo "Manager ID";  echo "</th>";
				echo "<th>"; echo "employee ID";  echo "</th>";
				echo "<th>"; echo "SSN";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "phone_number";  echo "</th>";
				echo "<th>"; echo "Data Hired";  echo "</th>";
				


			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['first']; echo "</td>";
				echo "<td>"; echo $row['last']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['attractionID']; echo "</td>";
				echo "<td>"; echo $row['locationID']; echo "</td>";
				echo "<td>"; echo $row['managerID']; echo "</td>";
				echo "<td>"; echo $row['employeeID']; echo "</td>";
				echo "<td>"; echo $row['ssn']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['phone_number']; echo "</td>";
				echo "<td>"; echo $row['data_hired']; echo "</td>";


				echo "</tr>";
			}
		echo "</table>";
		}
if(isset($_POST['submit1']))
		{
			if(isset($_SESSION['login_user']))
			{
				mysqli_query($db,"DELETE from employee where employeeID = '$_POST[employeeID]'; ");
				?>
					<script type="text/javascript">
						alert("Delete Successful.");
					</script>
				<?
			}
			else
			{
							?>
					<script type="text/javascript">
						alert("Please Login First.");
					</script>
				<?php
			}
		}

	?>
</div>
</body>
</html>