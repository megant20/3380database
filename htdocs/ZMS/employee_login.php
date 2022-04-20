<?php
  include "connection.php";
  include "navbar.php";
  include "style.php";

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="reg.css">

  <title>Employee Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

<section>
  <div class="container">
    <div class="card">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">ZOO Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">Employee Login</h1><br>
      <form  name="login" action="" method="post">
        
        <div class="label-float">
          <input class="form-control" type="text" name="username" placeholder="Username" required="" > <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          
          <div class="middle"><br><br>
          <button class="btn btn1" type="submit" name="submit" value="Login"> Login </button>
          </div>
      </div>
      
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:yellow;text-decoration: none;" href="empupdate_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp  
        <a style="color: yellow; text-decoration: none;" href=".html"></a>
      </p>
    </form>
    </div>
  </div>
</section>

  <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `employee` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $row= mysqli_fetch_assoc($res);

      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              -->
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        /*-------------if username & password matches---*/

        $_SESSION['login_user'] = $_POST['username']; 
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="empprofile.php"
          </script>
        <?php
      }
    }

  ?>

</body>
</html>