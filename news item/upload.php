<?php
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="upload.css">
  </head>
<body>
    <div class="top">
    <h1>THE TIMES OF INDIA</h1>
    <center>
      <a href="newshome.php">Home</a>
    </center>
    </div><br><br>
    <h2>Admin</h2><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
