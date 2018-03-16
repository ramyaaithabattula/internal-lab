<?php 
include "config.php";
session_start();
     if(isset($_POST['submit'])){
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from admin where username='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location: upload.php");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
?>
<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="admin.css">
  </head>
  <body>
    <div class="top">
    <h1>THE TIMES OF INDIA</h1>
    <center>
      <a href="newshome.php">Home</a>
    </center>
    </div>
    <h2>Admin</h2>
    <form method="post" action="upload.php" >
 <label>UserName : </label>
<input type="text" name="username"><br><br>
<label>Password : </label>
<input type="password" name="password"><br><br>
<button "type="submit" name="submit">LOG IN</button>
</center>
</form>
</body>
</html>
