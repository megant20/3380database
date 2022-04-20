<?php
include_once 'connection.php';
if(count($_POST)>0) {


$sql1= mysqli_query("UPDATE employee set username='$username', first='$first', last='$last', password='$password', email='$email', phone_number='$phone_number' WHERE username='.$username'")
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM employee WHERE username='" . $_GET['username'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<input type="text" name="username"  value="<?php echo $row['username']; ?>">
<br>
First Name: <br>
<input type="text" name="first" class="txtField" value="<?php echo $row['first']; ?>">
<br>
Last Name :<br>
<input type="text" name="last" class="txtField" value="<?php echo $row['last']; ?>">
<br>
City:<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Phone_number:<br>
<input type="text" name="Phone_number" class="txtField" value="<?php echo $row['phone_number']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>