<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Zoo Management System
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body background="">
	

	<div class="wrapper">
		<header>
			<table>
		<div class="logo">
			<img src="">
			<h1 style="color: black; text-align: center;" >ZOO MANAGEMENT SYSTEM</h1>
		</div>
		    </table>

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
			        <table width="100%" height="70px" border="3">
						<nav>
							<tr bgcolor="green">
								<td width="20%" align="center"><b><a style = "color: black; text-decoration: none;" href="index.php">HOME</a></font></b></td>
								<td width="20%" align="center"><b><a style = "color: black; text-decoration: none;" href="users_login.php">LOGIN</a></td>
								<td width="20%"align="center"><b><a style = "color: black; text-decoration: none;" href="registration.php">SIGN-UP</a></td>

								<td width="20%"align="center"><b><a style = "color: black; text-decoration: none;" href="footer.php">ABOUT</a></td>
							</tr>
						</nav>
					</table>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div class="sec_img" align="center" border="50%">
			<img src="" align="center">
			<br><br><br>
			<div class="box" >
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;"><img src="slideshow.gif"></h1><br><br>
				<h1 style="text-align: center;font-size: 25px;"><table><img src=""></table> </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 15:00 </h1><br>
			</div>
		</div>
		</section>
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>
