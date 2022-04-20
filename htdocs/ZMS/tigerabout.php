<?php
	include "connection.php";
  	include "navbar.php";
	include "style.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		About the Tiger
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
              <img src="7.jpg" alt="">
            </div>
        </div>
    </section>
  <div class="container">
   <br>
    <div class="card">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Tiger</h1>
        <br>
        <p>Tigers are largest member of the cat family (Felidae), rivaled only by the lion (Panthera leo) in strength and ferocity. The tiger is endangered throughout its range, which stretches from the Russian Far East through parts of North Korea, China, India, and Southeast Asia to the Indonesian island of Sumatra. The Siberian, or Amur, tiger (P. tigris altaica) is the largest, measuring up to 4 metres (13 feet) in total length and weighing up to 300 kg (660 pounds). The Indian, or Bengal, tiger (P. tigris tigris) is the most numerous and accounts for about half of the total tiger population. Males are larger than females and may attain a shoulder height of about 1 metre and a length of about 2.2 metres, excluding a tail of about 1 metre; weight is 160–230 kg (350–500 pounds), and tigers from the south are smaller than those of the north.

        The Indo-Chinese (P. tigris corbetti), and Sumatran (P. tigris sumatrae) tigers are bright reddish tan, beautifully marked with dark, almost black, vertical stripes. The underparts, the inner sides of the limbs, the cheeks, and a large spot over each eye are whitish. The rare Siberian tiger has longer, softer, and paler fur. White tigers, not all of them true albinos, have occurred from time to time, almost all of them in India (see also albinism). Black tigers have been reported less frequently from the dense forests of Myanmar (Burma), Bangladesh, and eastern India. The tiger has no mane, but in old males the hair on the cheeks is rather long and spreading. Although most classifications separate the species into six subspecies, some merge subspecies or suggest that two tiger species exist, P. tigris on the mainland of Asia and P. sondaica of Java, Bali, and Sumatra.</p>
      
    </div>
  </div>
</section>

</body>
</html>