<?php
	include "connection.php";
  	include "navbar.php";
	include "style.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		About the zoo
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
  <div class="container">
   <br>
    <div class="card">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">About Us</h1>
        <br>
        <p>More than 1,100 zoos, aquariums and wildlife institutions in 96 countries use ZMS to help them achieve best practice animal management and conservation goals. It reflects the expertise of leading aquatic and zoological institutions.

        ZMS animal husbandry and veterinary modules are integrated into a master database, establishing a rich reserve reflecting millions of records on more than 22,000 species and ten million individual animals. The result is the world’s largest set of data for ex situ populations of wildlife, one that reflects more than 40 years of experience across our global member community.
        ZMS zoo animal management software: One, global, accurate, comprehensive and reliable source of information on animals and their environments for zoos, aquariums and related organizations to serve animal management and conservation goals.</p>
      
    </div>
  </div>
</section>

</body>
</html>