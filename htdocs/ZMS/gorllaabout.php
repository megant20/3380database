<?php
	include "connection.php";
  	include "navbar.php";
	include "style.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		About the Western Lowland Gorillas
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
<body bgcolor="white">
	<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<table width="100%" height="70px" border="3">
						<nav>
							<tr bgcolor="black">
								<td width="20%" align="center"><b><font color="black"><a href="index.php">HOME</a></font></b></td>
								<td width="20%" align="center"><b><font color="white"><a href="logout.php">LOGOUT</a></td>
								<td width="20%"align="center"><b><font color="white"><a href="footer.php">ABOUT</a></td>
							</tr>
						</nav>
					</table>
			<?php
		}
		else
		{
			?>
			        <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="users_login.php">Login</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
        </ul>
    </div>

<?php
		}
			
		?>

		

    <section>
        <div id="banner">
            <link rel="stylesheet" href="style1.css">
            <div class="slide">
              <img src="gorilla.jpg" alt="">
            </div>
        </div>
    </section>
  <div class="container">
   <br>
    <div class="card">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Western Lowland Gorillas</h1>
        <br>
        <p>The Western Lowland Gorilla is the most numerous and widespread of all gorilla subspecies. Populations can be found in Cameroon, the Central African Republic, the Democratic Republic of Congo and Equatorial Guinea as well as in large areas in Gabon and the Republic of Congo. The exact number of western lowland gorillas is not known because they inhabit some of the most dense and remote rainforests in Africa. Significant populations still exist, including in isolated swamps and the remote swampy forests of the Republic of Congo.

        Western lowland gorillas can be distinguished from other gorilla subspecies by their slightly smaller size, their brown-grey coats and auburn chests. They also have wider skulls with more pronounced brow ridges and smaller ears. Large numbers have not protected the western lowland gorilla from decline. Because of poaching and disease, the gorilla’s numbers have declined by more than 60% over the last 20 to 25 years. Even if all of the threats to western lowland gorillas were removed, scientists calculate that the population would require some 75 years to recover.</p>
      
    </div>
  </div>
</section>

</body>
</html>