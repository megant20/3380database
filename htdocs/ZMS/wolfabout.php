<?php
	include "connection.php";
  	include "navbar.php";
	include "style.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		About the Mexican Gray Wolves
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
              <img src="wolves1.jpg" alt="">
            </div>
        </div>
    </section>
  <div class="container">
   <br>
    <div class="card">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Mexican Gray Wolves</h1>
        <br>
        <p>The Mexican wolf , also known as the lobo, is a subspecies of gray wolf native to southeastern Arizona and southern New Mexico in the United States, and northern Mexico; it also previously ranged into western Texas. It is the smallest of North America's gray wolves, and is similar to the extinct Great Plains wolf, though it is distinguished by its smaller, narrower skull and its darker pelt, which is yellowish-gray and heavily clouded with black over the back and tail. Its ancestors were likely the first gray wolves to enter North America after the extinction of the Beringian wolf, as indicated by its southern range and basal physical and genetic characteristics.

        Though once held in high regard in Pre-Columbian Mexico,it is the most endangered gray wolf subspecies in North America (if counting the red wolf as a separate species), having been extirpated in the wild during the mid-1900s through a combination of hunting, trapping, poisoning and digging pups from dens. After being listed under the Endangered Species Act in 1976, the United States and Mexico collaborated to capture all lobos remaining in the wild. This extreme measure prevented the lobos' extinction. Five wild Mexican wolves (four males and one pregnant female) were captured alive in Mexico from 1977 to 1980 and used to start a captive breeding program. From this program, captive-bred Mexican wolves were released into recovery areas in Arizona and New Mexico beginning in 1998 in order to assist the animals' recolonization of their former historical range.</p>
      
    </div>
  </div>
</section>

</body>
</html>