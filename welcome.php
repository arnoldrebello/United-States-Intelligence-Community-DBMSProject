<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<link href="css/bootstrap.min.css" type="text/css">
    <script src="jquery.min.js"></script>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="Welcome%20page.css">
</head>
<style>
    body{ background-image: url(login%20page%20image.jpg);
        background-position: top;
        background-size:cover;
        background-repeat:repeat-y;
    }
</style>
<body>
	<h1 style="font-family: sans-serif; color: white">Welcome Agent,</h1>
<button  style="float: right;" > <a href="index.php" onclick="alert('SECURELY LOGGING OUT')">Log Out</a></button>
<iframe src="agentpagetabledisplay.php" width="900px" height="300px" frameborder="5px" style="border:4px; border-style: ridge;border-color: white; border-radius: 20px; box-shadow: 6px 5px 24px aqua;"></iframe> <button style="position: relative;top: -80px;" type="button" class="button" value="allocateforce" ><span><a style="text-decoration: none; color: aliceblue;" href="allocateforces.php">Allocate Force</a></span></button>
<p><br/></p>
        <button type="button" class="button"><span><a style="text-decoration: none; color: aliceblue" href="Open%20database.php" >Open Agents Database</a></span></button>

        <button type="button" class="button"><span>&nbsp;<a style="text-decoration: none; color: aliceblue" href="Add%20New%20Agents%20Page.php">Add New Agent</a></span></button>
    
      <button type="button" class="button"><span><a style="text-decoration: none; color: aliceblue" href="locate%20agent.php"> Locate Agents</a></span></button>

        <button type="button" class="button"><span><a style="text-decoration: none;color: aliceblue" href="Retire%20Agent.php"> Retire Agents</a></span> </button>
      
      <button type="button" class="button"><span><a style="text-decoration: none;color: aliceblue"> Search by Characteristics</a></span> </button>
      <button type="button" class="button"><span><a style="text-decoration: none;color: aliceblue" href="agentpagetabledisplay2.php"> Print Complaint Status</a></span> </button>
      <p></p>
      <button style="position: relative;left: 0px; float: right;"><a href="logindetails.php"> Login Details</button>  
 <audio controls autoplay hidden>
  <source src="USIC%20agent%20confirmed.ogg" type="audio/ogg">
  <source src="USIC%20agent%20confirmed.mp3" type="audio/mpeg">
</audio>
</body>
</html>
<?php
}
else
{
	echo '<div style="font-size:1.25em;font-weight:bold;">Access Denied</div>';
	header("refresh:2;url=index.php");
}
?>
