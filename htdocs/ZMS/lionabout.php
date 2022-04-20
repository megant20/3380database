<?php
	include "connection.php";
  	include "navbar.php";
	include "style.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		About the African Lions
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
              <img src="6.jpg" alt="">
            </div>
        </div>
    </section>
  <div class="container">
   <br>
    <div class="card">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">African Lions</h1>
        <br>
        <p>African Lions have been admired throughout history for as symbols of courage and strength. These iconic animals have powerful bodies—in the cat family, they’re second in size only to tigers—and roars that can be heard from five miles away. An adult lion’s coat is yellow-gold, and juveniles have some light spots that disappear with age. Only male lions typically boast manes, the impressive fringe of long hair that encircles their heads.African lions once roamed most of Africa and parts of Asia and Europe. But the species has disappeared from 94 percent of its historic range and can only be found today in parts of sub-Saharan Africa. These lions mainly stick to the grasslands, scrub, or open woodlands where they can more easily hunt their prey, but they can live in most habitats aside from tropical rainforests and deserts.
        Lions are the only cats that live in groups, which are called prides—though there is one population of solitary lions. Prides are family units that may comprise anywhere from two to 40 lions—including up to to three or four males, a dozen or so females, and their young. All of a pride's lionesses are related, and female cubs typically stay with the group as they age. Young males eventually leave and establish their own prides by taking over a group headed by another male.</p>
      
    </div>
  </div>
</section>

</body>
</html>