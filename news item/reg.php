<?php
include "config.php";
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
	$qry="INSERT INTO `comment` (`username`,`email`,`password`,`phone`) VALUES ('$name','$email','$password','$phone')";
	mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error($conn));
	header('location:login.php');
	}
?>

<!DOCTYPE html>
<html>
  <head>
      <link rel = "stylesheet" type = "text/css" href = "reg.css" />
  </head>
<body>
<div class="top">
    <h1>THE TIMES OF INDIA</h1>
    <center>
      <a href="newshome.php">Home</a>
       <a href="login.php">login</a>
    </center>
    </div>
    <div class="header">
        <?php include "header.php"?>   
    </div>
    <div class="content">
  <div class="login-box">
    <h2>Register</h2>
        <form>
          First name:  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Last name:<br>
          <input type="text" name="first name">&emsp;
          <input type="text" name="last name">
          <br><br>
          Email id:<br>
          <input type="text" size="35" name="Email id">
          <br><br>
          Password: &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Confirm Password:<br>
          <input type="password" name="pass">&emsp;
          <input type="password" name="pass">
          <br><br>
          Phone:<br>
          <input type="text" name="phone">
          <br><br>
          <input type="submit" name="sub" value=" sign up">
          
        </form>
  </div>
</body>
</html>
