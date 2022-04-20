<?php
	include "navbar.php";
	include "connection.php";
	include "style.php";

	?>

<!DOCTYPE html>
<html>
<body>


<?php
if (isset($_GET['username'])) {
	$username = $_GET['username'];
		
		
		$sql = "SELECT * FROM employee WHERE username='$username'";
		$result = mysqli_query($db,$sql) or die (mysql_error());
		if ($result->num_rows > 0) {
		
			while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['first'];
			$last=$row['last'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$phone_number=$row['phone_number'];

		}

	}


}

	?>


	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>

	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>First Name: </b></h4></label>
		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>">

		<label><h4><b>Last Name</b></h4></label>
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Contact No</b></h4></label>
		<input class="form-control" type="text" name="phone_number" value="<?php echo $phone_number; ?>">

		<br>
		<div style="padding-left: 100px;">
		<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>



<?php

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$first=$_POST['first'];
			$last=$_POST['last'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$phone_number=$_POST['phone_number'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE employee SET pic='$pic', first='$first', last='$last', username='$username', password='$password', email='$email', phone_number='$phone_number' WHERE username='.$username';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="employee.php";
					</script>
				<?php
			

			}

		}


?>
</body>
</html>
