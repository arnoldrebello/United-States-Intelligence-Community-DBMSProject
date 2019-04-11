

      ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>US MarineCorps Agent Form</title>
    <link rel="stylesheet" type="text/css" href="US%20MarineCorps.css">
    <style>
    
    
        
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
    </head>
    <body>
	<div align="center">
<form method="POST" action="USMCai.php"  >
 <input type="text" placeholder="Agent ID" align="center" name="AgentID"><br/><br>
 <input type="text" placeholder="Name" align="center" name="name"><br/><br>
 <input type="text" placeholder="Missions" align="center" name="Missions"><br/><p></p>
 <input type="text" placeholder="Placed Division" align="center" name="division"><br/><p></p>
 <input type="text" placeholder="Specialized Weapons" align="center" name="specialisedweapons"><br/><p></p>
 <input type="text" placeholder="Operating Country" align="center" name="operatingcountry"><br/><p></p>
 
<input type="submit" value="Insert" name="loginbutton">
</form></div>
</body>
</html>
