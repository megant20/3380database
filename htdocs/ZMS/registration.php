<?php
  include "connection.php";
  include "navbar.php";
  include "style.php";

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="reg.css">

  <title>User Registration</title>
  
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
<br>
    <div class="card">
        <h1 style="text-align: center; font-size: 35px; color: white; font-family: Lucida Console;">ZOO Management System</h1>
        <h1 style="text-align: center; color: white; font-size: 25px;">User Sign Up Form</h1><br>

      <form name="Registration" action="" method="post">
        
        <div class="label-float">
          <input id = "username" class="form-control" style="color:White;" type="text" name="user_name" placeholder="Username" required=""> <br>
          <input class="form-control" style="color:White;" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" style="color:White;" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" style="color:White;" type="text" name="phone_number" placeholder="Phone No" required=""><br>
          <input class="form-control" style="color:White;" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" style="color:White;" type="password" name="password" placeholder="Password" required=""> <br>
          
          
          
            <div class="middle"><br><br>
          <button class="btn btn1" type="submit" name="submit" value="Login"> signup </button>
                    </div>

      </form>
     
    </div>
  </div>
</section>



    <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT user_name from `user`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['user_name']==$_POST['user_name'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          ?>
          <!--trigger one-->
          <script type="text/javascript">
              function validateForm() {
                username = getElementById("username");
                if (username.length > 5) {
                  alert("Username cannot be longer than 5 characters");
                  window.location="registration.php";
                return false;
              }
              return true;
            }

            </script>
          <script>
            if (validateForm() == true) {
              <?php
          mysqli_query($db,"INSERT INTO `user` VALUES('$_POST[user_name]', '$_POST[last]', '$_POST[first]', '$_POST[password]', '$_POST[email]', '$_POST[phone_number]');");
        ?>
           alert("Registration successful");
           window.location="users_login.php"
          }
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>

</body>
</html>