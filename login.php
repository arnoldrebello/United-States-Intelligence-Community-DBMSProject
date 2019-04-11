<?php
$AgentID=$_POST['AgentID'];
$PassCode=$_POST['PassCode'];
session_start();
$con=mysqli_connect("localhost","root","","DBMSProject");
$result=mysqli_query($con, "SELECT * FROM logindetails WHERE AgentID='$AgentID' && PassCode='$PassCode'; ");
$update=mysqli_query($con, "UPDATE logindetails  SET lastlogin = CURRENT_TIMESTAMP WHERE AgentID='$AgentID'; ");
$count=mysqli_num_rows($result);  
if($count==1)
{
	echo '<div style="font-size:1.25em;font-weight:bold; ">Access Secure. Please Proceed <br><br></div>';

	echo " Agent<b><lg> $PassCode</lg></b> Confirmed!";
	$_SESSION['log']=1;
	header("refresh:4;url= welcome.php");

}
else{
	echo '<div style="font-size:1.25em;font-weight:bold;">Access Denied</div>';
	header("refresh:2;url=index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agent Login</title>
	<link href="css/bootstrap.min.css" type="text/css">
    <script src="jquery.min.js"></script>
</head>
<style>
    body{ background-image: url(United%20States%20Intelligence%20Community.png);
        background-repeat:no-repeat;
            background-position: top;
            height: 50%;
            background-size:700px;
    }
</style>
<body>
	</form>
</body>
</html>