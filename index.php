<?php
session_start();
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
    body{ background-image: url(login%20page%20image.jpg);
        background-position: top;
        background-size:cover;
        background-repeat:repeat-y;
    }
    input{
        border-radius: 8px;
    }
    input[name=customercomplaints], select{
        position: relative;
        bottom: 30px;
        width: 500px;
        height:200px;
    }
    
    input{
        position: relative;
      
        top:25px;
        border: none;
        padding: 12px;
        text-align: center;}

    input[type=submit], select{
    	position: relative;
        right: 00px;
        top:25px;
        padding: 10px;
        border-radius: 25px;
        border: none;
        background-image: linear-gradient(to bottom, #eb94d0, #2079b0);
        color: azure;
        box-shadow: 6px 5px 24px red;
        width: 140px;}
</style>
<body>
    <div >
    
<div  class="customercomplaints" >
    <form style="margin-bottom: 200px;" method="POST" action="policehandover.php">
        <h4 style="font-family: sans-serif;color: white; "> Homeland Police handover</h4>
        <input type="text" placeholder="Incident" name="customercomplaints">
        <p style="font-family: sans-serif;color: white; position: relative;top: 10px;"><br/> Violence Type:
        <select style="height: 20px; width: 200px; position: relative;top: 0px" name="Type" id="AgentLocation">
            <option value="CIA">Presidential Threat/Head of the State</option>
            <option  value="FBI">In-land Security</option>
            <option value="NSA">Cyber Security Issues</option>
            <option value="USNavy">Requires Armed Forces(land)</option>
            <option value="USAF">Requires Armed Forces(Air)</option>
            <Option value="USMC">Requires Armes Forces(Sea)</Option>
           <option value="USIC">other</option>
        
        </select>
      </p>
      <p style="font-family: sans-serif;color: white; position: relative;top: 10px;"><br/> Country:
        <select style="height: 20px; width: 200px; position: relative;top: 0px" name="Location" id="AgentLocation">
            <option value="United States of America">United States of America</option>
            <option  value="Russia">Russia</option>
            <option value="Iraq">Iraq</option>
            <option value="Iran">Iran </option>
            <option value="Germany">Germany</option>
            <Option value="India">India</Option>
            <option value="France">France </option>
            <option value="Syria"> Syria</option>
            <option value="Pakistan"> Pakistan</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="United Kingdom">United Kingdom</option>
        </select>
      </p>
        <input type="submit" value="Lodge Complaint" name="submitbutton">
    </form>
</div>
<div style=" float: right; margin-top: -550px">
<form method="POST" action="login.php"  >
    <h4 style="font-family: sans-serif;color: white; ">Agent Login</h4>
 <input type="text" placeholder="Agent ID" align="center" name="AgentID"><br/><br>
 <input type="password" placeholder="Passcode" align="center" name="PassCode">
 <p></p>
<input type="submit" value="Login" name="loginbutton">
</form>
</div> 


</div>
<p style="font-family: sans-serif; font-size: 30px; color: white; position: relative;bottom:190px;text-shadow: 6px 5px 24px orange;" align="center"><b>Complaints Status</b></p>
<iframe src="agentpagetabledisplay.php" width="100%" height="300px"  style="position: relative;bottom:190px;border-radius:20px; border-style:ridge; "scrolling="auto"></iframe>
   
</body>
</html>
<?php
session_destroy();
?>
