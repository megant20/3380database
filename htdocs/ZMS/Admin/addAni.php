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
body {
  background:;
  position: relative;
}
.center-on-page {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%,-50%);
          transform: translate(-50%,-50%);
}
select {

  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: black;
  background-image: none;
}
/* Custom Select */
.select {
position: relative;
  left: 50%;
  transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
  display: block;
  width: 9.5em;
  height: 3em;
  line-height: 3;
  background: black;
  overflow: hidden;
  border-radius: .25em;
}
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: #fff;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #34495e;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: green;
}
.select::after {
  -webkit-transition: .25s all ease;
  transition: .25s all ease;
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
  <div class="h"><a href=".php">Delete Animal</a></div>
  <div class="h"><a href=".php">Edit Animal</a></div>
  <div class="h"><a href="logout.php">Logout</a></div>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; Menu</span>
  <div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add New Animals</b></h2>
    
    <form class="animal" action="" method="post">
        
        <input type="text" name="attractionID" class="form-control" placeholder="Attraction ID" required=""><br><br>
        <input type="text" name="name" class="form-control" placeholder="Animal Name" required=""><br><br>

        <br>
        <div class="select" >
        <select name="gender">
          <option value="">Select Gender</option>
          <option value="Male">MALE</option>
          <option value="Female">FEMALE</option>
        </select>
        </div>
        <br>
          <div class="select">
          <select name="classe">
          <option value="">Select Class</option>
          <option value="Mammal">Mammal</option>
          <option value="Bird">Bird</option>
          <option value="Amphibian">Amphibian</option>
          <option value="Fish">Fish</option>
          <option value="Reptile">Reptile</option>
          <option value="Invertebrate">Invertebrate</option>
        </select></div>
        <input type="text" name="DOB" class="form-control" placeholder="DOB" required=""><br><br><br>
        
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
        mysqli_query($db,"INSERT INTO animal VALUES ('','$_POST[attractionID]', '$_POST[name]', '$_POST[classe]','$_POST[gender]','$_POST[DOB]');");
        ?>
          <script type="text/javascript">
            alert("Animal Added Successfully.");
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
