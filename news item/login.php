<?php
        session_start();
        include "config.php";
?>

<html>
<head>
    <link rel="stylesheet" type=text/css href="login.css" />
</head>
<body>
<div class="top">
    <h1>THE TIMES OF INDIA</h1>
      <center><a href="newshome.html">Home</a></center>
    </div>
	<h2>Login</h2>
    <form action= "login.php" method="POST">
     username:<input type="text" name="username"/><br/><br>
     password:<input type="password" name="password"/><br/><br>
     <input class="two" type="submit" value="login" name="login"/><br>
     <br>
	 <a href="reg.php"><input class="three" type="button" value="Register"></a>
   </form>
   <?php
   if(isset($_POST['login'])){
	   
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from users where username='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location:comment.php");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
   ?>
</body>
</html>
