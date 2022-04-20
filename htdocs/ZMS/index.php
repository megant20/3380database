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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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

     <nav align="left">
        <div id="logo-img" align="left">
            <a href="index.php" align="left">
                <img src="ZMS.jpg" align="left">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>
                <a href="users_login.php">Login</a>
            </li>
            <li>
                <a href="registration.php">Sign Up</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
        </ul>
    </nav>

    <div id="banner">
	<link rel="stylesheet" href="style1.css">
<div class="slidershow middle">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="4.jpg" alt="">
        </div>
        <div class="slide">
          <img src="5.jpg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>

    </div>

    <main align="center">
        <a href="blogslist.html">
            <h2 class="section-heading">Our Best Animals</h2>
        </a>

        <section align="middle">
            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        
                    </a>
                </div>

                <div class="card-description" >
                    <a href="gorllaabout.php">
                    	
                        <h3>Western Lowland Gorillas</h3>
                        <img src="gorilla.jpg" alt="Card Image" width="450" height="400" >
                    </a>
                    <p>
                        Western Lowland Gorillas are native to central Africa, though our gorillas were all born and raised in other American zoos. Here in Houston, two troops call the zoo home. They have been specifically chosen to make the move to Houston as part of the Species Survival Plan...
                    </p>

                    <a href="gorllaabout.php" class="btn-readmore">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        
                    </a>
                </div>

                <div class="card-description" align="right">
                    <a href="wolfabout.php">
                        <h3 align="center">Mexican Gray Wolves</h3>
                        <img src="wolves1.jpg" alt="Card Image" width="450" height="400" align="right">
                    </a>
                    <p align="right">
                    	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                   The Mexican gray wolf is a subspecies of the gray wolf,<br> commonly referred to as “el lobo”.Though 
                        they once numbered <br> in the thousands, these wolves 
                        were wiped out in the U.S...
                    </p>
                    <a href="wolfabout.php" class="btn-readmore">Read more</a>
                </div>
            </div>
        </section>


        <section align="left">
            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        
                    </a>
                </div>

                <div class="card-description" >
                    <a href="lionabout.php">
                    	
                        <h3>African Lions</h3>
                        <img src="6.jpg" alt="Card Image" width="450" height="400" >
                    </a>
                    <p>
                        African Lions have been admired throughout history for as symbols of courage and strength. These iconic animals have powerful bodies—in the cat family, they’re second in size only to tigers—and roars that can be heard from five miles away
                    </p>

                    <a href="lionabout.php" class="btn-readmore">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        
                    </a>
                </div>

                <div class="card-description" align="right">
                    <a href="tigerabout.php">
                        <h3 align="center">Tiger</h3>
                        <img src="7.jpg" alt="Card Image" width="450" height="400" align="right">
                    </a>
                    <p align="right">
                    	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            Tigers are the world's largest cats.
                            The largest cat species in the world weighs a whopping average of 800.278 pounds. To illustrate, that’s equivalent to the combined weight of ten average-sized kids.
                    </p>
                    <a href="tigerabout.php" class="btn-readmore">Read more</a>
                </div>
            </div>
        </section>

        <h2 class="section-heading" align="center">Gift Shop </h2>

			<p align="center">
                    	<br>

					<img src="z9.gif" alt="Card Image" width="1000" height="500" align="center">
        <section id="section-source" align="left">


            <p >
            	

                <a href="giftshop.php" class="btn-readmore">Click Here</a>
            </p>
            
        </section>


    </main>

    <script src="main.js"></script>
		
		
</body>
<footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        
                        <li>
                            <a href="#">Donations</a>
                        </li>
                    </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            
                        </li>
                        <li>
                            
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </footer>
</html>