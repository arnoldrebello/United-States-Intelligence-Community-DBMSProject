<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>Allocate Forces</title>
</head>
<style>
    body{ background-image: url(login%20page%20image.jpg);
        background-position: top;
        background-size:cover;
        background-repeat:repeat-y;
    }
    input{ width: 250px;
    	height: 50px;
        position: relative;
        left:30px;
        top:25px;
        border: none;
        padding: 12px;
        text-align: center;
    border-radius: 8px;}

    input[type=submit], select{
    	position: relative;
        left: 150px;
        top:40px;
        padding: 10px;
        border-radius: 25px;
        border: none;
        background-image: linear-gradient(to bottom, #eb94d0, #2079b0);
        color: azure;
        box-shadow: 6px 5px 24px red;
        width: 100px;}
</style>
<body>
	<div align="center">
		<form method="POST" action="Allocate.php"  >
		<input type="text" placeholder="Incident" align="center" name="Complaint"><br/><br>
		<input type="submit" value="Allocate" name="loginbutton">
	</form>
<button style="float: right;"><a href="welcome.php">back</a></button>
</body>
</html>