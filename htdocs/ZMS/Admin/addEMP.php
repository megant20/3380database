<?php
  include "connection.php";
  include "navbar.php";
  include "style.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Animals</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    .srch
    {
      padding-left: 1000px;

    }
    
    body {
  background-color: #024629;
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
  color: white;
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

.book
{
    width: 400px;
    margin: 0px auto;
}
.form-control
{
  background-color: #080707;
  color: white;
  height: 40px;
}

.middle{
  position: absolute;
  
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}
.btn{
  background: none;
  border: 5px solid #000;
  font-family: "montserrat",sans-serif;
  text-transform: uppercase;
  padding: 12px 20px;
  min-width: 200px;
  margin: 10px;
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
	<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 <div class="h"><a href="profile.php">Profile</a></div>
  <div class="h"><a href=".php">Delete Employee</a></div>
  <div class="h"><a href=".php">Edit Employee</a></div>
  <div class="h"><a href="logout.php">Logout</a></div>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; Menu</span>
  <div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add New Employee</b></h2>
    
    <form class="animal" action="" method="post">
        
        <input type="text" name="first" class="form-control" placeholder="First Name" required=""><br>
        <input type="text" name="last" class="form-control" placeholder="Last Name" required=""><br>
        <input type="text" name="username" class="form-control" placeholder="UserName" required=""><br>
        <input type="text" name="attractionID" class="form-control" placeholder="Attraction ID" required=""><br>
        <input type="text" name="locationID" class="form-control" placeholder="Location ID" required=""><br>
        <input type="text" name="managerID" class="form-control" placeholder="Manager ID" required=""><br>
        <input type="text" name="ssn" class="form-control" placeholder="SSN" required=""><br>
        <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" required=""><br>
        <input type="text" name="data_hired" class="form-control" placeholder="Data Hired" required=""><br>
        <input type="text" name="password" class="form-control" placeholder="password" required=""><br><br>

        

        <div class="middle">
        <button style="text-align: center;" class="btn btn1" type="submit" name="submit">Add</button>
        </div>
    </form>
  </div>
<?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['login_user']))
      {
        mysqli_query($db,"INSERT INTO employee VALUES ('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[attractionID]','$_POST[locationID]','$_POST[managerID]','','$_POST[ssn]','$_POST[email]', '$_POST[phone_number]', '$_POST[data_hired]', '$_POST[password]');");
        ?>
          <script type="text/javascript">
            alert("Employee Added Successfully.");
          </script>

        <?php

      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    }
?>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#024629";
}
</script>

</body>
